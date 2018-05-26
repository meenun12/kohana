<?php
/**
 * Created by PhpStorm.
 * User: meenu
 * Date: 5/25/2018
 *  * * Time: 10:15 AM
 */

class Model_Post extends ORM{


    public function rules(){

        return array(

            'author' => array(
                    array('not_empty')
            ),

            'body' => array(
                array('not_empty')
            )

        );

    }

}