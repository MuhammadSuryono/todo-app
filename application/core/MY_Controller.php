<?php


class MY_Controller extends CI_Controller
{
    /***
     * @var array
     */
    protected array $parseData = [
        'content' => 'errors/index',
        'title_tab' => 'Not Found!',
        'app_name' => 'Todo App',
        'isLogin'=> false,
        'data' => array()
    ];

    function __construct()
    {
        parent::__construct();
        $this->parseData['isLogin'] = $this->is_login();
    }

    /***
     * @return bool
     */
    public function is_login() : bool
    {
        $isLogin = false;
        if ($this->session->userdata('userIsLogin')) $isLogin = true;

        return $isLogin;
    }

    /***
     * @param $dataSession
     */
    public function set_login($dataSession) : void {
        $session = array(
            'data' => $dataSession,
            'userIsLogin' => true
        );
        $this->session->set_userdata($session);
    }

    /***
     * @param string $view
     */
    public function set_view_content(string $view) : void {
        $this->parseData['content'] = $view;
    }

    /***
     * @param string $title
     */
    public function set_title_tab(string $title = '') : void {
        $titleTab = $this->parseData['app_name'] . "|" . $title;
        $titleTab = $title == "" ? $this->parseData['app_name'] : $titleTab;

        $this->parseData['title_tab'] = $titleTab;
    }

    /***
     * @param $data
     */
    public function set_data($data) : void {
        $this->parseData['data'] = $data;
    }

    public function render_view() : void {
        $this->load->view('index', $this->parseData);
    }

    /***
     * @param int $length
     * @return string
     */
    public function generate_random_string($length = 10) : string {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /***
     * @param string $value
     * @return string
     */
    public function generate_hash_with_salt(string $value) : string {
        $intermediateSalt = md5(uniqid(rand(), true));
        $salt = substr($intermediateSalt, 0, MAX_LENGTH);
        return hash("sha256", $value . $salt);
    }

    /***
     * @return string
     */
    public function random_background() : string {
        $background = ["success", "primary", "danger", "warning"];
        $randomInteger = rand(0, count($background) - 1);

        return $background[$randomInteger];
    }
}