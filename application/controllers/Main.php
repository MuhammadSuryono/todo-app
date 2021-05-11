<?php


class Main extends MY_Controller
{
    public $isLogin;
    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->is_login();
    }

    public function index()
    {
        $data = array(
            array("title" => "Menguruskan Badan Sejenak", "created_at" => "2021-10-11 10:10"),
            array("title" => "Puasa", "created_at" => "2021-10-11 10:10"),
            array("title" => "Memasukkan anak ke sekolah", "created_at" => "2021-10-11 10:10"),
            array("title" => "Rapat", "created_at" => "2021-10-11 10:10"),
            array("title" => "Ujian Nasional", "created_at" => "2021-10-11 10:10")
        );

        $parsingData = array(
          "group" => $this->generate_data_group($data)
        );

        $this->set_title_tab();
        $this->set_data($parsingData);
        $this->set_view_content('pages/home');
        $this->render_view();
    }

    public function todo($id)
    {
        $this->set_title_tab();
        $this->set_view_content('pages/todo');
        $this->render_view();
    }

    private function generate_data_group(array $data) : string {
        $card = "<div class='row'>";

        foreach ($data as $item) {
            $card .= "<div class='col-md-3'>
                        <div class='card bg-".$this->random_background()." text-white card-content'>
                            <div class='card-body'>
                                <blockquote class='blockquote mb-0'>
                                    <p class='text-light'>".$item['title']."</p>
                                </blockquote>
                                <p style='font-size: 10pt; margin-top: 20px' class='object-right'>".$item['created_at']."</p>
                            </div>
                        </div>
                       </div>";
        }

        $card .= "</div>";

        return $card;
    }
}