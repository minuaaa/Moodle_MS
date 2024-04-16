<?php

class __Mustache_3fc5bdd6905e3b7abaa9a461079758e4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="header-maxwidth d-print-none">
';
        $buffer .= $indent . '    <div class="w-100">
';
        $buffer .= $indent . '        <div class="d-flex flex-wrap">
';
        $value = $context->find('hasnavbar');
        $buffer .= $this->section2292e61b29f2de29daf222b96b952dad($context, $indent, $value);
        $buffer .= $indent . '            <div class="ml-auto d-flex">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div id="course-header">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('welcomemessage');
        $buffer .= $this->section82ce57f7d4e017340ba28cd0bf2d53ae($context, $indent, $value);
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('courseheaderimageurl');
            if (empty($value)) {
                
                $buffer .= $indent . '                <div class="d-flex align-items-center">
';
                $value = $context->find('contextheader');
                $buffer .= $this->section3ca2ced169183f0dabde43f4c5ea1a13($context, $indent, $value);
                $buffer .= $indent . '                    <div class="header-actions-container ml-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->sectionB5fe9a6e466efff66ca91399dfea59dd($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
            }
            $value = $context->find('courseheaderimageurl');
            $buffer .= $this->section94298133ba3bc075d19fc3a1268adc28($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section2292e61b29f2de29daf222b96b952dad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="page-navbar">
                {{{navbar}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="page-navbar">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section441497634669327a67d763d1d50b7764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="header-action ml-2">{{{.}}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82ce57f7d4e017340ba28cd0bf2d53ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex align-items-center">
                {{> core/welcome }}
                <div class="header-actions-container ml-auto" data-region="header-actions-container">
                    {{#headeractions}}
                        <div class="header-action ml-2">{{{.}}}</div>
                    {{/headeractions}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex align-items-center">
';
                if ($partial = $this->mustache->loadPartial('core/welcome')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '                <div class="header-actions-container ml-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->section441497634669327a67d763d1d50b7764($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ca2ced169183f0dabde43f4c5ea1a13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mr-auto">
                            {{{contextheader}}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="mr-auto">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5fe9a6e466efff66ca91399dfea59dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="header-action ml-2">{{{.}}}</div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ec43afbb9afe26edb12791552a0470e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="mr-auto">
                                {{{contextheader}}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="mr-auto">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEaa499e10444d5119c0c80c4e9cfa6ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="header-action ml-2">{{{.}}}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73b0baa7177d3f65307f4b42b0de092b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'min-height: {{{.}}};';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'min-height: ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section359bd57f4b5a30ac858643515fd30e46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'background-position: {{{.}}};';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'background-position: ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd8c9724ac70ec7f9726060afe41d516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-flex align-items-center">
                        {{#contextheader}}
                            <div class="mr-auto">
                                {{{contextheader}}}
                            </div>
                        {{/contextheader}}
                        <div class="header-actions-container ml-auto" data-region="header-actions-container">
                            {{#headeractions}}
                                <div class="header-action ml-2">{{{.}}}</div>
                            {{/headeractions}}
                        </div>
                    </div>
                    <div id="courseheaderimage" class="p-3 mb-3"
                         style="background-image: url(\'{{{courseheaderimageurl}}}\');
                             {{#courseheaderimageheight}}min-height: {{{.}}};{{/courseheaderimageheight}}
                             {{#courseheaderimageposition}}background-position: {{{.}}};{{/courseheaderimageposition}}">
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-flex align-items-center">
';
                $value = $context->find('contextheader');
                $buffer .= $this->section0ec43afbb9afe26edb12791552a0470e($context, $indent, $value);
                $buffer .= $indent . '                        <div class="header-actions-container ml-auto" data-region="header-actions-container">
';
                $value = $context->find('headeractions');
                $buffer .= $this->sectionEaa499e10444d5119c0c80c4e9cfa6ac($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div id="courseheaderimage" class="p-3 mb-3"
';
                $buffer .= $indent . '                         style="background-image: url(\'';
                $value = $this->resolveValue($context->find('courseheaderimageurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '                             ';
                $value = $context->find('courseheaderimageheight');
                $buffer .= $this->section73b0baa7177d3f65307f4b42b0de092b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                             ';
                $value = $context->find('courseheaderimageposition');
                $buffer .= $this->section359bd57f4b5a30ac858643515fd30e46($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbf0165ccd181b31c5b6ca8b6d9ea9e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courseheaderimage-{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courseheaderimage-';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section289c9429eafdd97d206f971ba1c2c575(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="mr-auto">
                                    {{{contextheader}}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="mr-auto">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d6414d2335452f4b83e78293b3a66b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="header-action ml-2">{{{.}}}</div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94298133ba3bc075d19fc3a1268adc28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#courseheaderimagelayoutheadingabove}}
                    <div class="d-flex align-items-center">
                        {{#contextheader}}
                            <div class="mr-auto">
                                {{{contextheader}}}
                            </div>
                        {{/contextheader}}
                        <div class="header-actions-container ml-auto" data-region="header-actions-container">
                            {{#headeractions}}
                                <div class="header-action ml-2">{{{.}}}</div>
                            {{/headeractions}}
                        </div>
                    </div>
                    <div id="courseheaderimage" class="p-3 mb-3"
                         style="background-image: url(\'{{{courseheaderimageurl}}}\');
                             {{#courseheaderimageheight}}min-height: {{{.}}};{{/courseheaderimageheight}}
                             {{#courseheaderimageposition}}background-position: {{{.}}};{{/courseheaderimageposition}}">
                    </div>
                {{/courseheaderimagelayoutheadingabove}}
                {{^courseheaderimagelayoutheadingabove}}
                    <div id="courseheaderimage" class="p-3 mb-3 {{#courseheaderimagelayoutstackedclass}}courseheaderimage-{{{.}}}{{/courseheaderimagelayoutstackedclass}}"
                            style="background-image: url(\'{{{courseheaderimageurl}}}\');
                                    {{#courseheaderimageheight}}min-height: {{{.}}};{{/courseheaderimageheight}}
                                    {{#courseheaderimageposition}}background-position: {{{.}}};{{/courseheaderimageposition}}">
                        <div class="d-flex align-items-center">
                            {{#contextheader}}
                                <div class="mr-auto">
                                    {{{contextheader}}}
                                </div>
                            {{/contextheader}}
                            <div class="header-actions-container ml-auto" data-region="header-actions-container">
                                {{#headeractions}}
                                    <div class="header-action ml-2">{{{.}}}</div>
                                {{/headeractions}}
                            </div>
                        </div>
                    </div>
                {{/courseheaderimagelayoutheadingabove}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('courseheaderimagelayoutheadingabove');
                $buffer .= $this->sectionEd8c9724ac70ec7f9726060afe41d516($context, $indent, $value);
                $value = $context->find('courseheaderimagelayoutheadingabove');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <div id="courseheaderimage" class="p-3 mb-3 ';
                    $value = $context->find('courseheaderimagelayoutstackedclass');
                    $buffer .= $this->sectionBbf0165ccd181b31c5b6ca8b6d9ea9e6($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                            style="background-image: url(\'';
                    $value = $this->resolveValue($context->find('courseheaderimageurl'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '\');
';
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('courseheaderimageheight');
                    $buffer .= $this->section73b0baa7177d3f65307f4b42b0de092b($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('courseheaderimageposition');
                    $buffer .= $this->section359bd57f4b5a30ac858643515fd30e46($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <div class="d-flex align-items-center">
';
                    $value = $context->find('contextheader');
                    $buffer .= $this->section289c9429eafdd97d206f971ba1c2c575($context, $indent, $value);
                    $buffer .= $indent . '                            <div class="header-actions-container ml-auto" data-region="header-actions-container">
';
                    $value = $context->find('headeractions');
                    $buffer .= $this->section6d6414d2335452f4b83e78293b3a66b5($context, $indent, $value);
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
