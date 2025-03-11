<?php 
class Document {
    function save(){

    }
}
class PDFDocument extends Document {
    public function save() {
        print('Сохранил пдф');
    }
}
class WordDocument extends Document {
    public function save() { 
        print('Сохранил ворд');
    }
}
class ExcelDocument extends Document {
    public function save() { 
        print('Сохранил эксель');
    }
}