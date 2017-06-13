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
        $this->date = $date;
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

    function addLike($like) {
        $this->like = $like;//à modifier
    }

    function setDate($date):string {//modifier pour accepter le format date
        $this->date = $date;
    }

    function addRetweet($retweet) {
        $this->retweet = $retweet;//à modifier
    }

    function setPictprof($pictprof) {
        $this->pictprof = $pictprof;
    }

    function setMsg($msg) {
        if (strlen($msg) <= 140) {
            $this->msg = $msg;
        } else {
            return 'Nombre de caractères supérieur à 140';
        }
    }

}

?>