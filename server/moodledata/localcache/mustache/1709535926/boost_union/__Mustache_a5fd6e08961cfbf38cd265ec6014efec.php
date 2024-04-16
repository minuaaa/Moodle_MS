<?php

class __Mustache_a5fd6e08961cfbf38cd265ec6014efec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('str');
        $buffer .= $this->section815cbbdafcc218ccd0b0f006c7f13ba0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('str');
        $buffer .= $this->sectionEdeb7c30063fb147be4f210bff4153c3($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section815cbbdafcc218ccd0b0f006c7f13ba0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templateemailtextprefix,theme_boost_union';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'templateemailtextprefix,theme_boost_union';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdeb7c30063fb147be4f210bff4153c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templateemailtextsuffix,theme_boost_union';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'templateemailtextsuffix,theme_boost_union';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
