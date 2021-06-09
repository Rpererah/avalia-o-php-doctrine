<?php


namespace Rpererah\Mercadinho\Controller;


use Nyholm\Psr7\UploadedFile;

class Upload
{
    private $name;
    private $folder;
    private $newName;
    private $granted;


    public function uploadImagem($targetInput,$folder,$name,$type_file):string
    {
        if(!empty($_FILES[$targetInput]['tmp_name'])){
            //objeto imagem
            $objectImg=$this->name=$_FILES[$targetInput];
            //nome dele
            $nameImage=$objectImg['name'];
            //a extensao
            $ext = pathinfo($nameImage, PATHINFO_EXTENSION);
            //o tipo dele no formato image/tipo
            $imagemType=$_FILES['userfile']['type'];
            //a pasta a ser utilizada
            $this->folder=$folder;
            //novo nome da imagem para evitar repeticoes de nomes
            $this->newName=$name;
            $file_upload=$this->folder.$this->newName.".".$ext;
            //lista de arquivos permitidos
            $granted=explode(",",$type_file);
            foreach ($granted as $key=>$type){
                $this->granted[]=$type;
            }

            if(!empty($name) and in_array($imagemType,$this->granted)){
                if(move_uploaded_file($this->name['tmp_name'],$file_upload)){
                    return $this->newName.".".$ext;
                }else{
                   return "Error in sending image";
                }
            }else{
               return "BAD FORMACT";
            }
        }
    }
}