<?php
/**
 * @package OpenCart Turkish Language Pack
 * @author Hakan ARSLAN
 * @link https://hakanarslan.net
 */

namespace Opencart\Admin\Controller\Extension\OcLanguageTr\Language;

class Turkish extends \Opencart\System\Engine\Controller {

	private string $extensionFolder = 'oc_language_tr';
	private string $extensionRoute = 'extension/oc_language_tr/language/turkish';

	public function index(): void {
		$this->load->language($this->extensionRoute);

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->extensionRoute, 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link($this->extensionRoute . '.save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

		$data['language_turkish_status'] = $this->config->get('language_turkish_status');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->extensionRoute, $data));
	}

	public function save(): void {
		$this->load->language($this->extensionRoute);

		$json = [];

		if (!$this->user->hasPermission('modify', $this->extensionRoute)) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('language_turkish', $this->request->post);

			$json['success'] = $this->language->get('text_success');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function install(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode('tr-tr');

			if (!$language_info) {
				// Türkçe dili ekle
				$language_data = [
					'name'       => 'Türkçe',
					'code'       => 'tr-tr',
					'locale'     => 'tr_TR.UTF-8,tr_TR,tr-tr,turkish,tr',
					'extension'  => $this->extensionFolder,
					'status'     => 1,
					'sort_order' => 1
				];

				$this->model_localisation_language->addLanguage($language_data);

				// Yeni eklenen dilin ID'sini al
				$language_info = $this->model_localisation_language->getLanguageByCode('tr-tr');
			} else {
				// Dil zaten varsa, extension alanını güncelle
				$this->model_localisation_language->editLanguage($language_info['language_id'], $language_info + ['extension' => $this->extensionFolder]);
			}

			// Veritabanındaki durum tablolarını Türkçeye güncelle
			if ($language_info) {
				$this->load->model($this->extensionRoute);

				$this->model_extension_oc_language_tr_language_turkish->updateLanguageTurkishTables($language_info['language_id']);

				$this->log->write('Türkçe Dil Paketi: Veritabanı tabloları güncellendi (language_id: ' . $language_info['language_id'] . ')');
			}
		}
	}

	public function uninstall(): void {
		if ($this->user->hasPermission('modify', 'extension/language')) {
			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguageByCode('tr-tr');

			if ($language_info) {
				// İsteğe bağlı: Dil kayıtlarını silmek için aşağıdaki satırları aktif edin
				// $this->load->model($this->extensionRoute);
				// $this->model_extension_oc_language_tr_language_turkish->deleteLanguageEntries($language_info['language_id']);

				$this->model_localisation_language->deleteLanguage($language_info['language_id']);

				$this->log->write('Türkçe Dil Paketi: Dil kaldırıldı (language_id: ' . $language_info['language_id'] . ')');
			}
		}
	}
}
