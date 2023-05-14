# Turkey Presidential Elections API

With this API, you can retrieve information about the presidential election votes in Turkey both nationwide and province-based.The API is built using Php.

## USAGE
The data returned by the API is in JSON format.
Api Link : [https:/secim.erenboluk.com](https:/secim.erenboluk.com)

# Türkiye Cumhurbaşkanı Seçimleri API
Bu API aracılığıyla Türkiye geneli ve il bazlı cumhurbaşkanı seçim oyları hakkında bilgi alabilirsiniz. API, Php kullanılarak oluşturulmuştur.

## KULLANIM
API tarafından döndürülen veriler JSON formatındadır.
API Bağlantı Linki: [https:/secim.erenboluk.com](https:/secim.erenboluk.com)

### RESPONSE 
```
{
    "success": true,
    "turkiyeGenel": [
        {
            "aday": "RECEP TAYYİP ERDOĞAN",
            "oy": 13744828,
            "yüzde": "52.02"
        },
        {
            "aday": "MUHARREM İNCE",
            "oy": 139981,
            "yüzde": "0.53"
        },
        {
            "aday": "KEMAL KILIÇDAROĞLU",
            "oy": 11127010,
            "yüzde": "42.11"
        },
        {
            "aday": "SİNAN OĞAN",
            "oy": 1409948,
            "yüzde": "5.34"
        }
    ],
    "ilTaban": {
        "1": {
            "il": "Adana",
            "snc": [
                {
                    "aday": "RECEP TAYYİP ERDOĞAN",
                    "kod": 41,
                    "toplam": 258585,
                    "yüzde": "46.38"
                },
                {
                    "aday": "MUHARREM İNCE",
                    "kod": 42,
                    "toplam": 2201,
                    "yüzde": "0.39"
                },
                {
                    "aday": "KEMAL KILIÇDAROĞLU",
                    "kod": 43,
                    "toplam": 266376,
                    "yüzde": "47.78"
                },
                {
                    "aday": "SİNAN OĞAN",
                    "kod": 44,
                    "toplam": 30379,
                    "yüzde": "5.45"
                }
            ]
        }
        
 ```  
        
