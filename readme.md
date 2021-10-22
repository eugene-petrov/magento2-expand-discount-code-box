[![M2 Coding Standard](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/coding-standard.yml)
[![M2 Mess Detector](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/mess-detector.yml)
[![M2 PHPStan](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-expand-discount-code-box/actions/workflows/phpstan.yml)

***ReadyToGo_ExpandDiscountCodeBox***

_Task:_ expand discount code box on checkout cart

_Before:_
![before](./.readme/before.png)

_After:_
![after](./.readme/after.png)


To make this box expanded 
![checkout_page.png](./.readme/checkout_page.png)
you will need to rewrite this template: Magento_Checkout::cart/coupon.phtml


**To enable this module execute:**

- `composer require eugene-petrov/magento2-expand-discount-code-box`
or if the cmd above is not working: `composer config repositories.readyToGoExpandDiscountCodeBox vcs git@github.com:eugene-petrov/magento2-expand-discount-code-box.git`
- `php bin/magento setup:upgrade`
- `php bin/magento cache:clean`

