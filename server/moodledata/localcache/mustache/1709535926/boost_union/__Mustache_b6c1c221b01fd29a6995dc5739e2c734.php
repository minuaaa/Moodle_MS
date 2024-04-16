<?php

class __Mustache_b6c1c221b01fd29a6995dc5739e2c734 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('items');
        $buffer .= $this->section85a59437c6e1b819a99ffce94cb4c3d5($context, $indent, $value);

        return $buffer;
    }

    private function section5536f67e8aa17ad465bcdd2e03c87d14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e5a77b2943a27a9708e89863d9c0e76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{.}}" data-toggle="tooltip"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="tooltip"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23af091fd3f4b163335e21746eca9cc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{pixicon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('pixicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9625f345c43cbf47695087ebad2af59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}}{{pixicon}}{{/pix}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section23af091fd3f4b163335e21746eca9cc0($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section086bd372fe206c90a0a94acbaf757f70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img aria-hidden="true" src="{{imgsrc}}" alt="{{{title}}}"/>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img aria-hidden="true" src="';
                $value = $this->resolveValue($context->find('imgsrc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA326fbcc7733b2c1062497fb7ae95469(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#" class="carousel-navigation-link {{#itemdata.classes}} {{.}} {{/itemdata.classes}} dropdown-item pl-5" role="menuitem" {{#tooltip}}title="{{.}}" data-toggle="tooltip"{{/tooltip}} tabindex="1" data-carousel-target-id="carousel-item-{{submenuid}}">
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{{title}}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{{text}}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="#" class="carousel-navigation-link ';
                $value = $context->findDot('itemdata.classes');
                $buffer .= $this->section5536f67e8aa17ad465bcdd2e03c87d14($context, $indent, $value);
                $buffer .= ' dropdown-item pl-5" role="menuitem" ';
                $value = $context->find('tooltip');
                $buffer .= $this->section7e5a77b2943a27a9708e89863d9c0e76($context, $indent, $value);
                $buffer .= ' tabindex="1" data-carousel-target-id="carousel-item-';
                $value = $this->resolveValue($context->find('submenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('pixicon');
                $buffer .= $this->sectionD9625f345c43cbf47695087ebad2af59($context, $indent, $value);
                $value = $context->find('pixicon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                ';
                    $value = $context->find('imgsrc');
                    $buffer .= $this->section086bd372fe206c90a0a94acbaf757f70($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9abeb3f18a4afe9b1cd6477123c4b499(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{key}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section801bcd19aebdc5786ad20c4358b88203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88cf02333464ab58b712e6338f43e106(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#key}}{{key}}="{{value}}" {{/key}} {{#name}}{{name}}="{{value}}"{{/name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('key');
                $buffer .= $this->section9abeb3f18a4afe9b1cd6477123c4b499($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('name');
                $buffer .= $this->section801bcd19aebdc5786ad20c4358b88203($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD31d51881772f4f16544e2c20c4323e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{url}}}" class="dropdown-item {{#itemdata.classes}} {{.}} {{/itemdata.classes}} pl-5" role="menuitem" tabindex="-1" {{#isactive}}aria-current="true"{{/isactive}}
                {{#attributes}}{{#key}}{{key}}="{{value}}" {{/key}} {{#name}}{{name}}="{{value}}"{{/name}} {{/attributes}}
                {{#tooltip}}title="{{.}}" data-toggle="tooltip"{{/tooltip}}>
                {{{text}}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="dropdown-item ';
                $value = $context->findDot('itemdata.classes');
                $buffer .= $this->section5536f67e8aa17ad465bcdd2e03c87d14($context, $indent, $value);
                $buffer .= ' pl-5" role="menuitem" tabindex="-1" ';
                $value = $context->find('isactive');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('attributes');
                $buffer .= $this->section88cf02333464ab58b712e6338f43e106($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('tooltip');
                $buffer .= $this->section7e5a77b2943a27a9708e89863d9c0e76($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85a59437c6e1b819a99ffce94cb4c3d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#haschildren}}
        <a href="#" class="carousel-navigation-link {{#itemdata.classes}} {{.}} {{/itemdata.classes}} dropdown-item pl-5" role="menuitem" {{#tooltip}}title="{{.}}" data-toggle="tooltip"{{/tooltip}} tabindex="1" data-carousel-target-id="carousel-item-{{submenuid}}">
            {{#pixicon}}
                {{#pix}}{{pixicon}}{{/pix}}
            {{/pixicon}}
            {{^pixicon}}
                {{#imgsrc}}<img aria-hidden="true" src="{{imgsrc}}" alt="{{{title}}}"/>{{/imgsrc}}
            {{/pixicon}}
            {{{text}}}
        </a>
    {{/haschildren}}

    {{^haschildren}}
        {{#link}}
            <a href="{{{url}}}" class="dropdown-item {{#itemdata.classes}} {{.}} {{/itemdata.classes}} pl-5" role="menuitem" tabindex="-1" {{#isactive}}aria-current="true"{{/isactive}}
                {{#attributes}}{{#key}}{{key}}="{{value}}" {{/key}} {{#name}}{{name}}="{{value}}"{{/name}} {{/attributes}}
                {{#tooltip}}title="{{.}}" data-toggle="tooltip"{{/tooltip}}>
                {{{text}}}
            </a>
        {{/link}}
    {{/haschildren}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('haschildren');
                $buffer .= $this->sectionA326fbcc7733b2c1062497fb7ae95469($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('haschildren');
                if (empty($value)) {
                    
                    $value = $context->find('link');
                    $buffer .= $this->sectionD31d51881772f4f16544e2c20c4323e0($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
