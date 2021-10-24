<?php


interface shareInterface
{
    public function setPost($post);
    public function shareIt();
}

class shareInTelegram implements shareInterface
{

    protected $post;

    public function setPost($post)
    {
        $this->post = $post;
    }

    public function shareIt()
    {
        return 'you share this : ' . $this->post . ' on telegram';
    }
}

class shareInFacebook implements shareInterface
{

    protected $post;

    public function setPost($post)
    {
        $this->post = $post;
    }

    public function shareIt()
    {
        return 'you share this : ' . $this->post . ' on facebook';
    }
}


class shareOnSocialMediaFacade
{
    protected $social_media_classes = [];

    public function __construct($social_media_classes = [])
    {
        $this->social_media_classes = $social_media_classes;
    }

    public function setPost($post)
    {
        foreach ($this->social_media_classes as $class) {
            if ($class instanceof shareInterface) {
                $class->setPost($post);
            }
        }
    }

    public function ShareIt()
    {
        $result = [];
        foreach ($this->social_media_classes as $class) {
            if ($class instanceof shareInterface) {
                $result[] = $class->shareIt();
            }
        }
        return json_encode($result, JSON_PRETTY_PRINT);
    }
}


$share_on_social_media = new shareOnSocialMediaFacade([new shareInFacebook, new shareInTelegram]);
$share_on_social_media->setPost('Facade Pattern');
echo ($share_on_social_media->shareIt());
