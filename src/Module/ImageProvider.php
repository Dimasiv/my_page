<?php
namespace App\Module;

use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider
{
  private string $current;

  public function __construct(string $current)
  {
      $this->current = $current;
  }

  public function GetUrls(): array
  {
      $ArrayOfUrls = ImageSpider::find($this->current);
      shuffle($ArrayOfUrls);
      $ArrayOfUrls= array_slice($ArrayOfUrls, 0, 5);
      return $ArrayOfUrls;
  }
}