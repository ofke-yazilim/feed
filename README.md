# Feed
Sosyal medya platformları için  `xml`,`json` vb. formatlarda ürün feedleri hazırlayan taslak hazırlandı. 
- Factory Desing pattern kullanılarak hangi platforma ait ürün listesi alınacağı belirlendi. Mevcutta Facebook ve Twitter var.
- Kurulan basit view mantığı ile farklı formatlarda veri çıkışının olması sağlandı. Mevcutta sadece json ve xml var.
- Ürün listesi [products.json](https://github.com/ofke-yazilim/feed/blob/main/includes/products.json "Ürünler") dosyası kullanılarak hazırlandı.

# Yeni platform ekleme
Eğer default olarak eklemiş olduğum platformlardan hariç bir platform eklenilmek istenirse. **/app/Platforms** dizini içerisine istenilen platforma ait class, 
[IPlatform interfacesine uygun olarak hazırlanır.](https://github.com/ofke-yazilim/feed/blob/main/app/Platforms/IPlatform.php "IPlatform.php"). 

# Response için yeni dosya formatı ekleme
Mevcutta veriler, Json ve Xml formatta alınabilmektedir. Eğer yeni bir format eklenmek istenirse, öncelikle **resources/views** dizinine gidilir. 
Yeni format eklenilmek istenilen platforma ait dizin açılır ve yeni formatın hazırlanmasını sağlaycak dosya oluşturulur.

 # Örnek kullnım
 - [http://case.okesmez.com/?platform=facebook&format=json](http://case.okesmez.com/?platform=facebook&format=json)
 - [http://case.okesmez.com/api/v1/products/facebook/json](http://case.okesmez.com/api/v1/products/facebook/json)
 <pre>
 Yukarıda görüldüğü gibi platform değişkeni, hangi sosyal medya ortamı için çıktı alınacağını belirler.
 Format değişkeni ise çıktının hangi dosya formatında olacağını belirtir.
</pre>
# Örnek Linkler
 - [Facebook XML](http://case.okesmez.com/api/v1/products/facebook/xml)
 - [Facebook JSON](http://case.okesmez.com/api/v1/products/facebook/json)
 - [Twitter XML](http://case.okesmez.com/api/v1/products/twitter/xml)
 - [Twitter JSON](http://case.okesmez.com/api/v1/products/twitter/json)
 - [without rewrite](http://case.okesmez.com/?platform=facebook&format=json)