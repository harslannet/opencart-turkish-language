# OpenCart 4.1.0.3 Türkçe Dil Paketi

OpenCart 4.1.0.3 için kapsamlı Türkçe dil eklentisi.

> 🇹🇷 Mevcut OpenCart Türkçe çevirilerindeki reklamlar ve eksiklikler canımı sıktığı için bu dil paketini sıfırdan hazırladım. Çeviri sürecinde [Antigravity IDE](https://antigravity.dev) ve Gemini 3.0 Flash modelinden faydalandım. Tüm çevirileri kontrol ettim, herhangi bir sorun görmedim — ama gözümden kaçan bir şey varsa issue açın, memnuniyetle düzeltirim! 



## Özellikler

- Admin paneli tam Türkçe çeviri
- Mağaza (frontend) tam Türkçe çeviri
- Dashboard widget başlıkları
- Tüm eklenti/modül çevirileri (ödeme, kargo, toplam, raporlar vb.)
- Kurulumda otomatik veritabanı çevirisi:
  - Stok durumları (Stokta Var, Stokta Yok, 2-3 Gün, Ön Sipariş)
  - Sipariş durumları (Beklemede, İşleniyor, Tamamlandı, İptal Edildi vb.)
  - Abonelik durumları (Aktif, Askıya Alındı, Süresi Doldu vb.)
  - İade durumları ve nedenleri
  - Ağırlık ve uzunluk birimleri
  - Müşteri grupları

## Gereksinimler

- OpenCart 4.1.0.3 veya üzeri

## Kurulum

### Yöntem 1: Extension Installer (Önerilen)

1. Bu repository'yi `.zip` olarak indirin
2. OpenCart Admin → **Extensions** → **Installer**
3. `.zip` dosyasını yükleyin
4. **Extensions** → **Extensions** → **Languages** bölümüne gidin
5. "Türkçe" yanındaki **Install** (yeşil +) butonuna tıklayın
6. Ardından **Edit** (mavi kalem) ile ayarları kaydedin


## Dil Aktivasyonu

Kurulumdan sonra:

1. **System** → **Localisation** → **Languages** bölümüne gidin
2. "Türkçe" dilinin **Durum** sütununun aktif olduğundan emin olun
3. **Sistem** → **Ayarlar** → mağazanızı düzenleyin
4. **Yerel** sekmesinde **Dil** olarak "Türkçe" seçin
5. **Admin Dili** olarak da "Türkçe" seçebilirsiniz


## Katkıda Bulunma

Çeviri hataları veya eksiklikler için:
1. Issue açın
2. Pull request gönderin

## Lisans

MIT License

## Yazar

**Hakan ARSLAN**
- Web: [hakanarslan.net](https://hakanarslan.net)

## Teşekkürler

OpenCart topluluğuna katkılarından dolayı teşekkürler.
