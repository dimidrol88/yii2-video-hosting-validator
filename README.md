# yii2-video-hosting-validator
Yii2 валидатор для ссылок на видео хостинг youtube и vimeo
## Старт

### Установка через composer
```
$ composer require dimidrol88/yii2-video-hosting-validator
```

##Использование
### Добавьте в правила валидации
```php
...
[['link'], \dimidrol88\yii2-video-hosting-validator\VideoHostingValidator::class],
...
```