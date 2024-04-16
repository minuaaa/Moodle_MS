<?php

class __Mustache_0c169fcbb884f4ba735eab8ffe7a5b37 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('str');
        $buffer .= $this->sectionD609e3c254fba4f7e541e40259ac4bd8($context, $indent, $value);
        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= ($value === null ? '' : $value);
        $value = $context->find('str');
        $buffer .= $this->sectionC1280b37db4af80c02c0b5e5e538495d($context, $indent, $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionD609e3c254fba4f7e541e40259ac4bd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templateemailhtmlprefix,theme_boost_union';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'templateemailhtmlprefix,theme_boost_union';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1280b37db4af80c02c0b5e5e538495d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'templateemailhtmlsuffix,theme_boost_union';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'templateemailhtmlsuffix,theme_boost_union';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
