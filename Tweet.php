<?php


class Tweet {

    private $pseudo;
    private $like;
    private $date;
    private $retweet;
    private $pictprof;
    private $msg;

    public function __construct($pseudo, $like, $date, $retweet, $pictprof, $msg) {
        $this->pseudo = $pseudo;
        $this->like = $like;
        $this->date = new DateTime($date);
        $this->retweet = $retweet;
        $this->pictprof = $pictprof;
        $this->msg = $msg;
    }

    function getPseudo() {
        return $this->pseudo;
    }

    function getLike() {
        return $this->like;
    }

    function getDate() {
        return $this->date;
    }

    function getRetweet() {
        return $this->retweet;
    }

    function getPictprof() {
        return $this->pictprof;
    }

    function getMsg() {
        return $this->msg;
    }

    function setPseudo($pseudo) {
        if ($pseudo[0] === '@') {
            $this->pseudo = $pseudo;
        } else {
            return 'Le pseudo doit commencer par @';
        }
    }

    function addLike($like):int {
        $this->like = $like;
        $like++;
    }

    function setDate($date) {
        return $this->date = $date;
    }

    function addRetweet($retweet):int {
        $this->retweet = $retweet;
        $retweet++;
    }

    function setPictprof($pictprof) {
        $this->pictprof = $pictprof;
    }

    function setMsg($msg) {//maxlength en HTML dans le input textarea
        if (strlen($msg) > 140) {
            echo 'Nombre de caractères supérieur à 140';
            } else {
            return $this->msg = $msg;
        }
    }
    public function afficher(){
        return '<section><img src="' . $this->pictprof. '"/>' . $this->pseudo . ' a écrit : ' . $this->msg.'
    <br/>'. $this->date->format('Y/m/d') . ' ' . $this->retweet . ' retweet(s) et ' . $this->like.' like(s).</p></section>';
    }

}

?>