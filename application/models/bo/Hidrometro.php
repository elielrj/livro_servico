<?

    class Hidrometro extends CI_Model{

        private $local;
        private $marcadores;

        public function __construct(String $local, Marcador $marcadores)
        {
            $this->local = $local;
            $this->marcadores = $marcadores;
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
