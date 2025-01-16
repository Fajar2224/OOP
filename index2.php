<?php
  class Jedi
  {
    private$p_nama;
    private$p_lightsaber;
    private$p_status;

     function __construct($a_nama,$a_lightsaber,$a_status)
     {
        $this->p_nama=$a_nama;
        $this->p_lightsaber=$a_lightsaber;
        $this->p_status=$a_status;
     }
    function __destruct()
    {
        echo"Jedi $this->p_nama  Berhasil Dikirim <br>";
    } 
    function getNama()
    {
       echo $this->p_nama.'<br>';
   }

  }
  $JediMaster=new Jedi('Obi-Wan Kenobi','green','master');
 
  $Jedipadawan=new Jedi('Cal Kestis' ,'blue','padawan');
 
