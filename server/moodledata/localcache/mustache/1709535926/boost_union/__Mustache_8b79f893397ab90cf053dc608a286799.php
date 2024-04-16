<?php

class __Mustache_8b79f893397ab90cf053dc608a286799 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->findDot('regions.offcanvas.hasblocks');
        $buffer .= $this->sectionEbcbc6d801f9649d02881fc6428c590d($context, $indent, $value);

        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section592416ac7154edff44e387b42c749391(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="theme-block-region-offcanvas-left" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvasleft.addblockbutton }}}
                {{{ regions.offcanvasleft.regionhtml }}}
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="theme-block-region-offcanvas-left" class="theme-block-region ';
                $value = $this->resolveValue($context->findDot('regions.offcanvas.class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvasleft.addblockbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvasleft.regionhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c184bd6b2af8b5fd24e5f6157821803(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="theme-block-region-offcanvas-center" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvascenter.addblockbutton }}}
                {{{ regions.offcanvascenter.regionhtml }}}
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="theme-block-region-offcanvas-center" class="theme-block-region ';
                $value = $this->resolveValue($context->findDot('regions.offcanvas.class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvascenter.addblockbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvascenter.regionhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6173b33620a54131ca039977c6078a2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="theme-block-region-offcanvas-right" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvasright.addblockbutton }}}
                {{{ regions.offcanvasright.regionhtml }}}
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="theme-block-region-offcanvas-right" class="theme-block-region ';
                $value = $this->resolveValue($context->findDot('regions.offcanvas.class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvasright.addblockbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('regions.offcanvasright.regionhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbcbc6d801f9649d02881fc6428c590d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row">
        {{#regions.offcanvasleft.hasblocks}}
            <section id="theme-block-region-offcanvas-left" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvasleft.addblockbutton }}}
                {{{ regions.offcanvasleft.regionhtml }}}
            </section>
        {{/regions.offcanvasleft.hasblocks}}
        {{#regions.offcanvascenter.hasblocks}}
            <section id="theme-block-region-offcanvas-center" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvascenter.addblockbutton }}}
                {{{ regions.offcanvascenter.regionhtml }}}
            </section>
        {{/regions.offcanvascenter.hasblocks}}
        {{#regions.offcanvasright.hasblocks}}
            <section id="theme-block-region-offcanvas-right" class="theme-block-region {{regions.offcanvas.class}}" aria-label="{{#str}}blocks{{/str}}">
                {{{ regions.offcanvasright.addblockbutton }}}
                {{{ regions.offcanvasright.regionhtml }}}
            </section>
        {{/regions.offcanvasright.hasblocks}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="row">
';
                $value = $context->findDot('regions.offcanvasleft.hasblocks');
                $buffer .= $this->section592416ac7154edff44e387b42c749391($context, $indent, $value);
                $value = $context->findDot('regions.offcanvascenter.hasblocks');
                $buffer .= $this->section3c184bd6b2af8b5fd24e5f6157821803($context, $indent, $value);
                $value = $context->findDot('regions.offcanvasright.hasblocks');
                $buffer .= $this->section6173b33620a54131ca039977c6078a2f($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
