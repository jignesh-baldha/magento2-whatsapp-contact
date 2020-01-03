# Magento 2 WhatsApp Contact Button

## Features:

### Frontend
- It will display sticky WhatsApp chat button in footer

### Backend
- Set status, phone number and message function under menu Stores >> Configuration >> General - Contacts Under tabs WhatsApp Chat

## Introduction installation:

### Install Magento 2 Hide Price Not Login
- Download file
- Unzip the file
- Create a folder [root]/app/code/Baldha/WhatsAppContact
- Copy to folder

### Enable Extension

```
php bin/magento module:enable Baldha_WhatsAppContact
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
```


## Screenshot
![ScreenShot](https://github.com/jignesh-baldha/magento2-whatsapp-contact/blob/master/screenshot/configuration.png)
![ScreenShot](https://github.com/jignesh-baldha/magento2-whatsapp-contact/blob/master/screenshot/button.png)

## Donation
If you find this extension help you,  feel free to donate
:)

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://bit.ly/2sGRtKN)
