<?

    class NivelDeAcesso extends CI_Model{

        private $descricao;

        public function __construct(String $descricao)
        {
            $this->descricao = $descricao;
        }

        public function __get($key)
        {
            return $this->{$key};
        }

        public function __set($key, $value)
        {
            $this->{$key} = $value;
        }

        }


?>