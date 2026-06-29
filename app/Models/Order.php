<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // 1. WAJIB DITAMBAHKAN AGAR BISA MENYIMPAN DATA
    protected $fillable = [
        'customer_name',
        'phone',
        'item_type',
        'status',
    ];

    // 2. DISESUAIKAN DENGAN HURUF KAPITAL DI DATABASE ENUM
    public const STATUS_ANTREAN = 'Antrean';
    public const STATUS_PENGERJAAN = 'Pengerjaan';
    public const STATUS_SELESAI = 'Selesai';
    public const STATUS_DIAMBIL = 'Diambil';

    // Helper untuk WhatsApp message
    public function getWhatsAppMessage()
    {
        // 3. MENGGUNAKAN $this->item_type SESUAI DATABASE
        return match($this->status) {
            self::STATUS_ANTREAN => "Halo Kak {$this->customer_name}, nota perbaikan {$this->item_type} Anda di Sol Sepatu Fila Delphia sudah terdaftar.",
            self::STATUS_PENGERJAAN => "Halo Kak {$this->customer_name}, unit {$this->item_type} Anda sedang ditangani oleh teknisi kami.",
            self::STATUS_SELESAI => "Kabar baik Kak {$this->customer_name}! Perbaikan {$this->item_type} Anda telah SELESAI dan siap diambil.",
            self::STATUS_DIAMBIL => "Terima kasih Kak {$this->customer_name} telah memercayakan {$this->item_type} Anda kepada kami. Kami tunggu kesan Anda!",
            default => "Halo Kak {$this->customer_name}.",
        };
    }

    // Helper untuk WhatsApp button label
    public function getWhatsAppLabel()
    {
        return match($this->status) {
            self::STATUS_ANTREAN => 'Kirim Nota',
            self::STATUS_PENGERJAAN => 'Notif Proses',
            self::STATUS_SELESAI => 'Notif Selesai',
            self::STATUS_DIAMBIL => 'Kirim Thanks',
            default => 'WhatsApp',
        };
    }

    // Helper untuk WhatsApp button color
    public function getWhatsAppColor()
    {
        return match($this->status) {
            self::STATUS_ANTREAN => 'gray',
            self::STATUS_PENGERJAAN => 'warning',
            self::STATUS_SELESAI => 'success',
            self::STATUS_DIAMBIL => 'success',
            default => 'primary',
        };
    }

    // Helper untuk WhatsApp number
    public function getWhatsAppNumber()
    {
        // 4. MENGGUNAKAN $this->phone SESUAI NAMA KOLOM
        // Mengubah awalan '0' menjadi '62' secara otomatis
        return preg_replace('/^0/', '62', trim($this->phone));
    }
}