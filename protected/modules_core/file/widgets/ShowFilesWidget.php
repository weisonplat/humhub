<?php

/**
 * This widget is used include the files functionality to a wall entry.
 *
 * @package humhub.modules_core.file
 * @since 0.5
 */
class ShowFilesWidget extends HWidget
{

    /**
     * Object to show files from
     */
    public $object = null;

    /**
     * Executes the widget.
     */
    public function run()
    {
        $files = File::getFilesOfObject($this->object);
        $this->render('showFiles', array('files' => $files));
    }

}

?>