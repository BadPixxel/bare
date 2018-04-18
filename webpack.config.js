var Encore = require('@symfony/webpack-encore');

Encore

    //--------------------------------------------------------------------
    //  MAIN ASSETS CONFIG
    //--------------------------------------------------------------------

    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
//    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())
    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()



    //--------------------------------------------------------------------
    //  COMMON ASSETS 
    //--------------------------------------------------------------------
    .addEntry('js/common',              './src/Dolibarr/Core/ThemeBundle/Resources/assets/js/common.js')
    .addStyleEntry('css/common',        './src/Dolibarr/Core/ThemeBundle/Resources/assets/css/common.css')

    //--------------------------------------------------------------------
    //  JQUERY EXTENSIONS
    //--------------------------------------------------------------------


    //--------------------------------------------------------------------
    //  TWITER BOOTSTRAP 
    //--------------------------------------------------------------------
    .addEntry('js/bootstrap',           './vendor/twbs/bootstrap/dist/js/bootstrap.min.js')
    .addStyleEntry('css/bootstrap',     './vendor/twbs/bootstrap/dist/css/bootstrap.min.css')

    //--------------------------------------------------------------------
    //  FONT AWESOME 
    //--------------------------------------------------------------------
    .addStyleEntry('css/fontawesome',   './vendor/bmatzner/fontawesome-bundle/Bmatzner/FontAwesomeBundle/Resources/public/css/font-awesome.min.css')
    
    //--------------------------------------------------------------------
    //  DATATABLES 
    //--------------------------------------------------------------------
//    .addEntry('js/datatables',          './src/Dolibarr/Core/ThemeBundle/Resources/assets/plugins/datatables/datatables.js')
//    .addStyleEntry('css/datatables',    './src/Dolibarr/Core/ThemeBundle/Resources/assets/plugins/datatables/datatables.min.css')
    
    
;

module.exports = Encore.getWebpackConfig();
