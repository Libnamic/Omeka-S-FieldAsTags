<?php
/**
 * FieldsAsTags
 *
 * Allows to use fields as tags
 *
 * @copyright Jesús Bocanegra Linares, Libnamic, 2020
 *
 */
namespace FieldsAsTags;

use Zend\Form\Fieldset;
use Zend\Form\Text;
use Omeka\Module\AbstractModule;
use FieldsAsTags\Form\ConfigForm;
use Zend\EventManager\Event;
use Zend\EventManager\SharedEventManagerInterface;
use Zend\Mvc\Controller\AbstractController;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Renderer\PhpRenderer;

class Module extends AbstractModule
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function install(ServiceLocatorInterface $serviceLocator)
    {
    }

    public function uninstall(ServiceLocatorInterface $serviceLocator)
    {
    }

    public function attachListeners(SharedEventManagerInterface $sharedEventManager)
    {
    
        // Inject styles in item show and browse pages
        $sharedEventManager->attach(
            'Omeka\Controller\Site\Item',
            'view.browse.after',
            [$this, 'injectCSS']
        );
        $sharedEventManager->attach(
            '*',
            'view.show.after',
            [$this, 'injectCSS']
        );

    }

    /**
     * Prints CSS
     *
     * @param Event $event
     */
    public function injectCSS(Event $event)
    {
        $target = $event->getTarget();       
        $target->headLink()->appendStylesheet($target->assetUrl('css/fieldsastags.css', 'FieldsAsTags'));
    }

}
