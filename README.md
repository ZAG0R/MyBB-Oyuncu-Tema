# MyBB-Oyuncu-Tema
Tüm dosyaları **FTP**'de **MyBB**'nin bulunduğu klasöre yüklemeniz yeterli.
Ardından aşağıda ki eklentileri aktif ediniz ;

- Anasayfada ve Forum Görüntülemede Avatar Eklentisi
- Profilim
- PHP and Template Conditionals

 
Herşey tamam, güncellemeleri buradan takip edebilirsiniz.
## Kendi sunucularımı nasıl eklerim ?
Temanın üst tarafında ki sunucu kısmı php yardımı ile farklı bir siteden çekilmektedir. Korkunuz olmasın güvenlik açığı bulunmamaktadır. Kullanabilmek için Zip dosyası içerisinde ki anadizin yazan klasör içindekileri anadizine gönderiyoruz.
### Tabi bunu kullanabilmek için tema içerisinde php kullanım iznine sahip olmanız gerekiyor. Peki bunu nasıl yapacaksınız ?
Zip dosyasının içerisinde inc/plugins klasöründe bu izne sahip olmanızı sağlıyacak eklenti mevcut, Eklenti yönetiminden -> PHP and Template Conditionals adlı eklentiyi aktif etmeniz yeterli.([Eklentinin orjinali için buraya tıklayınız.](http://community.mybb.com/thread-31860.html))

### Kendi sunucumu nasıl eklerim ?
sunucu.php'yi açıp SiteBaglan2 yazan yerde ki ip(http://api.gametracker.rs/demo/xml/server_info/**93.119.25.16:7777**/) kısmına kendi sunucu ip'nizi giriniz. 
**Not:** Bu kısımla uğraşmak istemeyen **Garry's Mod, CS:GO, TF2** gibi oyunlar için kullanacak arkadaşlar, daha hızlı olması açısından ekte paylaştığım **sunucu.php** dosyasını Anadizine atabilirler, sunucunuzu eklemek ise çok basit **sunucu.php** dosyasını açın **$ip="İp adresiniz" $queryport="Port"** buraları kendinize göre doldurmanız yeterli.

### Ekledim fakat sunucum gözükmüyor ?
Normal çünkü [gametracker.rs](http://gametracker.rs/) sitesine sunucunuzun kaydı bulunmuyordur. Aşağıda ki resimler sayesinde kayıt olabilirsiniz ;
![server](http://image.prntscr.com/image/b40099c67a73427687cba0ea77c39e06.png)
![server2](http://image.prntscr.com/image/576db67cd4ba445a9027a19a7ba5f535.png)


Sunucunuzu ekledikten sonra **My Servers** yazısına tıklayıp eklediğiniz sunucuya tıklayın.
Sunucunuzun ismin **GameTracker** yapıp **Claim Ownership** deyin.(Sunucunun sahibinin sizin olduğunu teyit ediyor.) Yaptıktan sonra eski haline geri getirebilirsiniz. Hepsi bu kadar.
## Profilde kapak fotoğrafı olsun istiyorsanız ;
Admin paneline girip forum ayarları -> Özel profil yönetimi -> yeni profil alanı ekle diyoruz.

    Profil başlığı                : Kapak Fotoğrafı
    Kısa bilgi                     : Size kalmış
    Alan seçenekleri          : Text Kutusu
    Düzenli ifade               : Boş bırakın
    Maksimum uzunluk     : 500
    Minimum Mesaj Sayısı : 0
    Görüntülenme Sırası    : Size kalmış (Bende 0)
    Gerekli?                       : Kayıt sırasında ve Profil Bilgilerini Düzenleme kısmında bu alanı zorunlu olarak girdirmek istiyorsanız Evet deyin.
    Görüntüleme izinleri     : Tüm gruplar
    Düzenleme İzinleri       : Tüm gruplar

Diyoruz. Oluşturduğumuz Özel profilin üzerine gelip fid sayısını buluyoruz. (Üzerine gelince aşağıda edit&fid4 gibi bir yazı çıkar burda fid numaramız 4 bunu aklımızda tutuyoruz.)

**Temalar&Şablonlar -> Şablonlar -> Üye Profili Şablonlar -> member_profile** açıyoruz.
 **{$userfields['fid4']}** bunu aratın ve az önce bulduğumuz fid numarasını **4** yazan alana giriyoruz.


