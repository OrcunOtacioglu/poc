<?php

namespace BetterProposals\Helpers;

use BetterProposals\Application;

class Str
{
    /**
     * Returns the template tag value.
     * 
     * @param $content
     * @param $startTag
     * @param $endTag
     * @return false|string
     */
    public static function getTagValue($content, $startTag, $endTag)
    {
        $content = ' ' . $content;
        $initialTag = strpos($content, $startTag);
        
        if ($initialTag == 0) {
            return false;
        }
        
        $initialTag += strlen($startTag);
        $length = strpos($content, $endTag, $initialTag) - $initialTag;
        
        $tagValue = str_replace('\'', '', substr($content, $initialTag, $length));
        
        return trim($tagValue);
    }

    /**
     * Returns the layout name.
     * 
     * @param $content
     * @return string
     */
    public static function getLayoutName($content)
    {
        $template = self::getTagValue($content, '{% extends', '%}');
        
        if (!$template) {
            return Application::$app->defaultTemplate;
        }
        
        return $template;
    }

    /**
     * Removes the layout tag.
     * 
     * @param $content
     * @return false|string
     */
    public static function removeLayoutTag($content)
    {
        $closingTag = strpos($content, '%}') + 2;

        return substr($content, $closingTag, strlen($content));
    }
}