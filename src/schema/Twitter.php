<?php
/**
 * Created by PhpStorm.
 * User: molodyko
 * Date: 20.09.2015
 * Time: 12:45
 */

namespace samson\cms\seo\schema;

class Twitter extends Schema{

    /** @var string Id of schema */
    public $id = 'twitter';

    /** @var array Unique fields of schema */
    public $fields = array();

    /** @var string Name of structure */
    public $structureName = 'SEO_name_structure_twitter';

    /** @var string Url of structure */
    public $structureUrl = 'SEO_url_structure_twitter';

    /** @var array Relation between name of fields and particular meta tags */
    public $relations = array(
        '__SEO_Title' => 'twitter:title',
        '__SEO_Description' => 'twitter:description',
        '__SEO_Image' => 'twitter:image:src',
        '__SEO_Creator' => 'twitter:creator',
        '__SEO_SiteName' => 'twitter:site',
    );
}