<?php
class news extends CI_Controller {

	public function index(){
        $this->load->model('News_model');
        $newNews = $this->News_model->get_new_news();
        $items = array('This is news item 1',
                        "Next bit of news here",
                        "Ending note on the news",
                        $newNews
        );
        $data["theNews"] = $items;
		$this->load->view('templates/header.php');
        $this->load->view('news_items.php', $data);
        $this->load->view('templates/footer.php');
	}
}
