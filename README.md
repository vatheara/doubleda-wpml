doubleda-wpml
=
doubleda-wpml is a wp plugin re-customize by doubleda. 

features
=
- supported imroz elementor addon (some)

imroz-addon not yet support
=
- blog
- services with left title
- portfolio
- team
- about with tab

adding wpml support journey 
=
Enable Elementor data Custom field for show all elementor data setting for debugging purpose
1. go to wpml setting 
2. scroll down to Custom Fields Translation
3. click Show system fields
4. find Custom fields called '_elementor_data' and check to Translate ratio

after that when you try to translate any page or post the _elementor_data will show up
then we can copy and paste to https://www.unserialize.com/ and select Krumo option.
you can find widgetType and element name after that.

then goto ../wp-content/plugins/sitepress-multilingual-cms/addons/wpml-page-builders/classes/Integrations/Elementor/modules/ and create new module. you can check any file in that dir you will get the idea how to create a new one.
when you created one don't forget to add that module file dir path to autoload file in vendor/composer/ (classmap or static).
if you know how php concurrency work you do it better.

last step go to ../wp-content/plugins/sitepress-multilingual-cms/addons/wpml-page-builders/classes/Integrations/Elementor/class-wpml-elementor-translatable-nodes.php and add it in function get_nodes_to_translate().

More Docs Reference
=
-https://wpml.org/documentation/plugins-compatibility/elementor/how-to-add-wpml-support-to-custom-elementor-widgets/#adding-wpml-translation-support
