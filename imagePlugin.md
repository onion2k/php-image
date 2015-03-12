# Image\_plugin Interface #

The image\_plugin interface defines a minimal set of required methods needed for a plugin. These are:

  * attachToOwner($owner) - A method to image.class.php uses to attach a plugin to the owner image.
  * getTypeId() - Accessor to the $type variable.
  * getSubTypeId() - Accessor to the $sub\_type variable.
  * getVersion() - Accessor to the $version variable.
  * generate() - Method called by image.class.php to generate any effect or drawn content.

# Image\_plugin\_base class #

The image plugin base class gives a basic framework to build a new plugin. As the attachToOwner, getTypeId, getsubTypeId, and getVersion methods will always present the same basic functionality it's sensible to extend this object rather than rewriting those methods every time. The exception is the generate() method, this has to be created anew for every plugin.

An example of a very basic plugin framework:

```
class image_example_plugin extends image_plugin_base implements image_plugin {

    public $type_id = "plugin";
    public $sub_type_id = "example";
    public $version = 1.0;

    public function __construct() {
        
    }

    public function generate() {

    }

}
```