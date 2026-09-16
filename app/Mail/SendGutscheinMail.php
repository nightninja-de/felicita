<?php

namespace App\Mail;

use App\Models\GutscheinOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use BeyondCode\Vouchers\Models\Voucher;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendGutscheinMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public GutscheinOrder $order,
        public Voucher $voucher,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ihr Felicità Gutschein',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.gutschein',
            with: [
                'order' => $this->order,
                'voucher' => $this->voucher,
            ],
        );
    }

    public function attachments(): array
    {
        $qrDataUri = (new PngWriter())
            ->write(new QrCode($this->voucher->code, size: 300, margin: 10))
            ->getDataUri();

        $pdf = Pdf::loadView('pdf.gutschein', [
            'order' => $this->order,
            'voucher' => $this->voucher,
            'qrDataUri' => $qrDataUri,
        ])->output();

        return [
            Attachment::fromData(fn () => $pdf, 'felicita-gutschein-'.$this->voucher->code.'.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
