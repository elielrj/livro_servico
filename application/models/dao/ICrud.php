<?php
    interface ICrud{
        public function create($object);
        public function update($object);
        public function retrive($id);
        public function retriveAll();
        public function delete($object);
    }
?>