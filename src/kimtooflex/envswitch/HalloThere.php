<?php

namespace kimtooflex\envswich;

/**
 * A terribly useful class
 */
class EnvSwitch
{

  public static  function setEnv($domain,$Devcallback,$prodCallback)
  {
      $url =  strtolower((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        $domain=strtolower($domain);

      if(stripos( $domain, ",")>0) {
          $domains = explode( ",",$domain );

          foreach ($domains as $curDomain) {
           if(stripos( $url,  $curDomain )>0) {
                $Devcallback();
                return;
           }
          }
      } else {
        if(stripos( $url,  $domain )>0) {
             $Devcallback();
             return;
        }
      }
    $prodCallback();
  }
}
