<?php
/**
 * @package OpenCart Turkish Language Pack
 * @author Hakan ARSLAN
 * @link https://hakanarslan.net
 */

namespace Opencart\Admin\Model\Extension\OcLanguageTr\Language;

class Turkish extends \Opencart\System\Engine\Model {

	/**
	 * Veritabanındaki durum/açıklama tablolarını Türkçeye günceller
	 *
	 * @param int $language_id
	 * @return void
	 */
	public function updateLanguageTurkishTables(int $language_id): void {

		// customer_group_description - Müşteri Grupları
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_group_description` SET `name` = 'Varsayılan', `description` = 'Varsayılan müşteri grubu' WHERE `language_id` = '" . (int)$language_id . "' AND `customer_group_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_group_description` SET `name` = 'Perakende', `description` = 'Perakende müşteri grubu' WHERE `language_id` = '" . (int)$language_id . "' AND `customer_group_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_group_description` SET `name` = 'Toptan', `description` = 'Toptan satış müşteri grubu' WHERE `language_id` = '" . (int)$language_id . "' AND `customer_group_id` = '3'");

		// length_class_description - Uzunluk Birimleri
		$this->db->query("UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = 'Santimetre' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'cm'");
		$this->db->query("UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = 'Milimetre' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'mm'");
		$this->db->query("UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = 'İnç' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = '″'");

		// order_status - Sipariş Durumları
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Beklemede' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'İşleniyor' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Kargoya Verildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '3'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Tamamlandı' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '5'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'İptal Edildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '7'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Reddedildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '8'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'İade İptal Edildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '9'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Başarısız' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '10'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'İade Edildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '11'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Tersine Çevrildi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '12'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Ters İbraz' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '13'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Süresi Doldu' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '14'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'İşlendi' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '15'");
		$this->db->query("UPDATE `" . DB_PREFIX . "order_status` SET `name` = 'Geçersiz' WHERE `language_id` = '" . (int)$language_id . "' AND `order_status_id` = '16'");

		// return_action - İade İşlemleri
		$this->db->query("UPDATE `" . DB_PREFIX . "return_action` SET `name` = 'Para İadesi Yapıldı' WHERE `language_id` = '" . (int)$language_id . "' AND `return_action_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_action` SET `name` = 'Kredi Verildi' WHERE `language_id` = '" . (int)$language_id . "' AND `return_action_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_action` SET `name` = 'Değişim Yapıldı' WHERE `language_id` = '" . (int)$language_id . "' AND `return_action_id` = '3'");

		// return_reason - İade Nedenleri
		$this->db->query("UPDATE `" . DB_PREFIX . "return_reason` SET `name` = 'Hasarlı Ürün' WHERE `language_id` = '" . (int)$language_id . "' AND `return_reason_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_reason` SET `name` = 'Yanlış Ürün Gönderildi' WHERE `language_id` = '" . (int)$language_id . "' AND `return_reason_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_reason` SET `name` = 'Sipariş Hatası' WHERE `language_id` = '" . (int)$language_id . "' AND `return_reason_id` = '3'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_reason` SET `name` = 'Arızalı, Lütfen Açıklayın' WHERE `language_id` = '" . (int)$language_id . "' AND `return_reason_id` = '4'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_reason` SET `name` = 'Diğer, Lütfen Açıklayın' WHERE `language_id` = '" . (int)$language_id . "' AND `return_reason_id` = '5'");

		// return_status - İade Durumları
		$this->db->query("UPDATE `" . DB_PREFIX . "return_status` SET `name` = 'Beklemede' WHERE `language_id` = '" . (int)$language_id . "' AND `return_status_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_status` SET `name` = 'Ürün Bekleniyor' WHERE `language_id` = '" . (int)$language_id . "' AND `return_status_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "return_status` SET `name` = 'Tamamlandı' WHERE `language_id` = '" . (int)$language_id . "' AND `return_status_id` = '3'");

		// stock_status - Stok Durumları
		$this->db->query("UPDATE `" . DB_PREFIX . "stock_status` SET `name` = 'Stokta Yok' WHERE `language_id` = '" . (int)$language_id . "' AND `stock_status_id` = '5'");
		$this->db->query("UPDATE `" . DB_PREFIX . "stock_status` SET `name` = '2-3 Gün' WHERE `language_id` = '" . (int)$language_id . "' AND `stock_status_id` = '6'");
		$this->db->query("UPDATE `" . DB_PREFIX . "stock_status` SET `name` = 'Stokta Var' WHERE `language_id` = '" . (int)$language_id . "' AND `stock_status_id` = '7'");
		$this->db->query("UPDATE `" . DB_PREFIX . "stock_status` SET `name` = 'Ön Sipariş' WHERE `language_id` = '" . (int)$language_id . "' AND `stock_status_id` = '8'");

		// subscription_status - Abonelik Durumları
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Beklemede' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '1'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Aktif' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '2'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Süresi Doldu' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '3'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Askıya Alındı' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '4'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'İptal Edildi' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '5'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Başarısız' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '6'");
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_status` SET `name` = 'Reddedildi' WHERE `language_id` = '" . (int)$language_id . "' AND `subscription_status_id` = '7'");

		// weight_class_description - Ağırlık Birimleri
		$this->db->query("UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = 'Kilogram' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'kg'");
		$this->db->query("UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = 'Gram' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'g'");
		$this->db->query("UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = 'Libre' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'lb'");
		$this->db->query("UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = 'Ons' WHERE `language_id` = '" . (int)$language_id . "' AND `unit` = 'oz'");
	}

	/**
	 * Eklenti kaldırılırken Türkçe dil kayıtlarını siler
	 *
	 * @param int $language_id
	 * @return void
	 */
	public function deleteLanguageEntries(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_group_description` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "length_class_description` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_status` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "return_action` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "return_reason` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_status` WHERE `language_id` = '" . (int)$language_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "weight_class_description` WHERE `language_id` = '" . (int)$language_id . "'");
	}
}
