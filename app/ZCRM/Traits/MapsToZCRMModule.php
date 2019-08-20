<?php

namespace App\ZCRM\Traits;

trait MapsToZCRMModule {
    public static function bootMapsToZCRMModule() {
        static::created(function (self $model) {
            $module = new $model->zcrmModule;

            $model->mapToZCRMModule($module);

            $module->save();

            $model->zcrm_entity_id = $module->getEntityId();

            $model->saveQuietly();
        });

        static::updated(function (self $model) {
            if (!$model->zcrm_entity_id) return;

            $module = $model->zcrmModule::find($model->zcrm_entity_id);

            $model->mapToZCRMModule($module);

            $module->save();
        });

        static::deleted(function (self $model) {
            if (!$model->zcrm_entity_id) return;
            
            $module = $model->zcrmModule::find($model->zcrm_entity_id);

            $module->delete();
        });
    }

    public function saveQuietly(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }
}
