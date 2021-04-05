<?php
/**
 * MediaPackageResponse.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.58
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the MediaPackageResponse model.
 *
 * @author  OpenAPI Generator team
 */
class MediaPackageResponse
{
  /**
   * ID of the package.
   *
   * @var int|null
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $id;

  /**
   * Name of the package.
   *
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * Absolute path to the package.
   *
   * @var string|null
   * @SerializedName("url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $url;

  /**
   * @var array[]|null
   * @SerializedName("categories")
   * @Assert\All({
   *     @Assert\Type("OpenAPI\Server\Model\MediaCategoryResponse")
   * })
   * @Type("array<OpenAPI\Server\Model\MediaCategoryResponse>")
   */
  protected $categories;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->url = isset($data['url']) ? $data['url'] : null;
    $this->categories = isset($data['categories']) ? $data['categories'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param int|null $id ID of the package
   *
   * @return $this
   */
  public function setId(int $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @param string|null $name Name of the package
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets url.
   */
  public function getUrl(): ?string
  {
    return $this->url;
  }

  /**
   * Sets url.
   *
   * @param string|null $url Absolute path to the package
   *
   * @return $this
   */
  public function setUrl(string $url = null)
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Gets categories.
   *
   * @return array[]|null
   */
  public function getCategories(): ?array
  {
    return $this->categories;
  }

  /**
   * Sets categories.
   *
   * @param array[]|null $categories
   *
   * @return $this
   */
  public function setCategories(array $categories = null)
  {
    $this->categories = $categories;

    return $this;
  }
}