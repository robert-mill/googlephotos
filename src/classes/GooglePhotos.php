<?php
/**
 * Created by PhpStorm.
 * User: rmill_000
 * Date: 02/10/2017
 * Time: 11:41
 */
namespace robertmill\classes;

class GooglePhotos
{
    private $album;
    protected $userId = false;
    protected $albumId = false;
    public function __construct($albumid)
    {
        if(isset($albumid)){
            $this->setAlbum($albumid);
        }

    }

    /**
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param mixed $album
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }

    public function buildAlbum(){

        if($this->getAlbum()!==''){
            return '<iframe src="https://drive.google.com/embeddedfolderview?id='.$this->getAlbum() . '#grid" frameborder="0"></iframe>';
        }else{
            return false;
        }

    }


}