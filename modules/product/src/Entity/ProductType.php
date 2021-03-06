<?php

namespace Drupal\commerce_product\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the product type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_product_type",
 *   label = @Translation("Product type"),
 *   label_singular = @Translation("Product type"),
 *   label_plural = @Translation("Product types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count product type",
 *     plural = "@count product types",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\commerce_product\ProductTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\commerce_product\Form\ProductTypeForm",
 *       "edit" = "Drupal\commerce_product\Form\ProductTypeForm",
 *       "delete" = "Drupal\commerce_product\Form\ProductTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_product_type",
 *   admin_permission = "administer product types",
 *   bundle_of = "commerce_product",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "variationType",
 *     "injectVariationFields",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/product-types/add",
 *     "edit-form" = "/admin/commerce/config/product-types/{commerce_product_type}/edit",
 *     "delete-form" = "/admin/commerce/config/product-types/{commerce_product_type}/delete",
 *     "collection" = "/admin/commerce/config/product-types"
 *   }
 * )
 */
class ProductType extends ConfigEntityBundleBase implements ProductTypeInterface {

  /**
   * The product type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The product type label.
   *
   * @var string
   */
  protected $label;

  /**
   * The product type description.
   *
   * @var string
   */
  protected $description;

  /**
   * The variation type ID.
   *
   * @var string
   */
  protected $variationType;

  /**
   * Indicates if variation fields should be injected.
   *
   * @var bool
   */
  protected $injectVariationFields = TRUE;

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * {@inheritdoc}
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getVariationTypeId() {
    return $this->variationType;
  }

  /**
   * {@inheritdoc}
   */
  public function setVariationTypeId($variation_type_id) {
    $this->variationType = $variation_type_id;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function shouldInjectVariationFields() {
    return $this->injectVariationFields;
  }

  /**
   * {@inheritdoc}
   */
  public function setInjectVariationFields($inject) {
    $this->injectVariationFields = (bool) $inject;
    return $this;
  }

}
