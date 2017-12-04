/**
 * 2007-2015 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2015 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 **/

/* globals $, ga, jQuery */

var GoogleAnalyticEnhancedECommerce = {

	setCurrency: function(Currency) {
		ga('set', '&cu', Currency);
	},
	
	add: function(Product, Order, Impression) {
		var Products = {};
		var Orders = {};

		var ProductFieldObject = ['id', 'name', 'category', 'brand', 'variant', 'price', 'quantity', 'coupon', 'list', 'position', 'dimension1'];
		var OrderFieldObject = ['id', 'affiliation', 'revenue', 'tax', 'shipping', 'coupon', 'list', 'step', 'option'];

		if (Product != null) {
			if (Impression && Product.quantity !== undefined) {
				delete Product.quantity;
			}

			for (var productKey in Product) {
				for (var i = 0; i < ProductFieldObject.length; i++) {
					if (productKey.toLowerCase() == ProductFieldObject[i]) {
						if (Product[productKey] != null) {
							Products[productKey.toLowerCase()] = Product[productKey];
						}

					}
				}

			}
		}

		if (Order != null) {
			for (var orderKey in Order) {
				for (var j = 0; j < OrderFieldObject.length; j++) {
					if (orderKey.toLowerCase() == OrderFieldObject[j]) {
						Orders[orderKey.toLowerCase()] = Order[orderKey];
					}
				}
			}
		}

		if (Impression) {
			ga('ec:addImpression', Products);
		} else {
			ga('ec:addProduct', Products);
		}
	},
	
	replaceDiacritics: function(str) {

	  var diacritics = [
		{char: 'A', base: "Ą"},
		{char: 'a', base: "ą"},
		{char: 'E', base: "Ę"},
		{char: 'e', base: "ę"},
		{char: 'S', base: "Ś"},
		{char: 's', base: "ś"},
		{char: 'O', base: "Ó"},
		{char: 'o', base: "ó"},
		{char: 'L', base: "Ł"},
		{char: 'l', base: "ł"},
		{char: 'N', base: "Ń"},
		{char: 'n', base: "ń"},
		{char: 'C', base: "Ć"},
		{char: 'c', base: "ć"},
		{char: "Z", base: "Ż"},
		{char: "z", base: "ż"},
		{char: "Z", base: "Ź"},
		{char: "z", base: "ź"}
	  ]

	  diacritics.forEach(function(letter){
		str = str.replace(letter.base, letter.char);
	  });

	  return str;
	},

	addProductDetailView: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'detail');
		ga('send', 'event', 'Produkty', 'Wyświetlenie strony produktu ' + replaceDiacritics(Product.name), Product.name + ", ID (" + Product.id + ")",{'nonInteraction': 1});
	},

	addToCart: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'add');
		ga('send', 'event', 'Koszyk', 'Dodanie do koszyka produktu ' + Product.name, Product.name + ", ID (" + Product.id + ")", Math.round(Product.price)); // Send data using an event.
	},

	removeFromCart: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'remove');
		ga('send', 'event', 'Koszyk', 'Usunięcie z koszyka produktu ' + Product.name, Product.name + ", ID (" + Product.id + ")", Math.round(Product.price)); // Send data using an event.
	},

	addProductImpression: function(Product) {
		//ga('send', 'pageview');
	},

	/**
	id, type, affiliation, revenue, tax, shipping and coupon.
	**/
	refundByOrderId: function(Order) {
		/**
		 * Refund an entire transaction.
		 **/
		ga('ec:setAction', 'refund', {
			'id': Order.id // Transaction ID is only required field for full refund.
		});
		ga('send', 'event', 'Zamówienia', 'Żądanie zwrotu pieniędzy za zamówienie nr ' + Order.id, Order.id, {'nonInteraction': 1});
	},

	refundByProduct: function(Order) {
		/**
		 * Refund a single product.
		 **/
		//this.add(Product);

		ga('ec:setAction', 'refund', {
			'id': Order.id, // Transaction ID is required for partial refund.
		});
		ga('send', 'event', 'Zamówienia', 'Żądanie zwrotu pieniędzy za produkt ' + Product.name, Product.name, {'nonInteraction': 1});
	},

	addProductClick: function(Product) {
		var ClickPoint = jQuery('a[href$="' + Product.url + '"].quick-view');

		ClickPoint.on("click", function() {
			GoogleAnalyticEnhancedECommerce.add(Product);
			ga('ec:setAction', 'click', {
				list: Product.list
			});

			ga('send', 'event', 'Produkty', 'Wyświetlenie strony produktu ' + Product.name, Product.name + ", ID (" + Product.id + ")", {
				'hitCallback': function() {
					return !ga.loaded;
				}
			});
		});

	},

	addProductClickByHttpReferal: function(Product) {
		this.add(Product);
		ga('ec:setAction', 'click', {
			list: Product.list
		});

		ga('send', 'event', 'Produkty', 'Wyświetlenie strony produktu ' + Product.name, Product.name + ", ID (" + Product.id + ")", {
			'nonInteraction': 1,
			'hitCallback': function() {
				return !ga.loaded;
			}
		});

	},

	addTransaction: function(Order) {

		//this.add(Product);
		ga('ec:setAction', 'Finalizacja zamówienia', Order);
		ga('send', 'event','Finalizacja zamówienia', 'Wykonanie transakcji', 'Zamówienie nr ' + Order.id, {
			'hitCallback': function() {
				$.get(Order.url, {
					orderid: Order.id,
					customer: Order.customer
				});
			}
		});

	},

	addCheckout: function(Step) {
		ga('ec:setAction', 'Checkout', {
			'step': Step
			//'option':'Visa'
		});
		
		if (Step == 0)
			ga('send', 'event', 'Finalizacja zamówienia', 'Wyświetlenie koszyka');
		else if (Step == 1)
			ga('send', 'event', 'Finalizacja zamówienia', 'Formularz adresu wysyłki');
		else if (Step == 2)
			ga('send', 'event', 'Finalizacja zamówienia', 'Wybór sposobu dostawy');
		else
			ga('send', 'event', 'Finalizacja zamówienia', 'Wybór metody płatności');
	}
};
