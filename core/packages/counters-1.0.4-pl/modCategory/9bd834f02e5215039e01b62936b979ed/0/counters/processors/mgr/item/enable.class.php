<?php

class CountersItemEnableProcessor extends modObjectProcessor
{
    public $objectType = 'CountersItem';
    public $classKey = 'CountersItem';
    public $languageTopics = ['counters'];
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('counters_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var CountersItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('counters_item_err_nf'));
            }

            $object->set('active', true);
            $object->save();
        }

        return $this->success();
    }

}

return 'CountersItemEnableProcessor';
