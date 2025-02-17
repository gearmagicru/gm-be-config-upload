<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\Upload\Controller;

use Gm;
use Gm\Backend\Config\Controller\ServiceForm;
use Gm\Backend\Config\Upload\Widget\ServiceWindow;

/**
 * Контроллер конфигурации службы "Загрузка".
 * 
 * Cлужба {@see \Gm\Upload\Upload}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\Upload\Controller
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function createWidget(): ServiceWindow
    {
        /** @var \Gm\Backend\UserRoles\Model\Role $role */
        $role = Gm::getMModel('Role', 'gm.be.user_roles');
        return new ServiceWindow([
            'service' => Gm::$app->uploader,
            'unified' => Gm::getUnified(Gm::$app->uploader),
            'roles'   => $role->fetchCombo()
        ]);
    }
}
