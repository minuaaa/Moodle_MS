<?php

class __Mustache_99723ee2653710a48a085b3a5806d7a2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showfootnote');
        $buffer .= $this->sectionC41c1f73cbfecc2ef65663852576e19e($context, $indent, $value);

        return $buffer;
    }

    private function sectionEb70bb93f9d385174514011e7c780c87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' mt-1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' mt-1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03658ecc7cf89cd8b41a2e2aa252ddab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_aboutuslink pr-2 mr-2">
                            <a href="{{ aboutuslink }}">{{ aboutuspagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_aboutuslink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('aboutuslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('aboutuspagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c528e340306a32629cd7e091db4cc8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_offerslink pr-2 mr-2">
                            <a href="{{ offerslink }}">{{ offerspagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_offerslink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('offerslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('offerspagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ff244caa51a266d8c455419373920ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_imprintlink pr-2 mr-2">
                            <a href="{{ imprintlink }}">{{ imprintpagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_imprintlink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('imprintlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('imprintpagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdf6185a28f9cf5e39b14a13443e3651(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_contactlink pr-2 mr-2">
                            <a href="{{ contactlink }}">{{ contactpagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_contactlink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('contactlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('contactpagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC569bcfb8179be760d1d28d44dc2195f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_helplink pr-2 mr-2">
                            <a href="{{ helplink }}">{{ helppagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_helplink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('helplink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('helppagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35703a8cb346339344555faefaf7f7c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_maintenancelink pr-2 mr-2">
                            <a href="{{ maintenancelink }}">{{ maintenancepagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_maintenancelink pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('maintenancelink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('maintenancepagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32860478e0d3ed745e3336065cee6c05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page1link pr-2 mr-2">
                            <a href="{{ page1link }}">{{ page1pagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page1link pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page1link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('page1pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section584b69a18932090ea7affd1de8e1f48b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page2link pr-2 mr-2">
                            <a href="{{ page2link }}">{{ page2pagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page2link pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page2link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('page2pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF506db389573a41b57cb2dd700c95881(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page3link pr-2 mr-2">
                            <a href="{{ page3link }}">{{ page3pagetitle }}</a>
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page3link pr-2 mr-2">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page3link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('page3pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA73b2f0c054fe4c7b6f829d7407fcc87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="row{{# footnotesetting }} mt-1{{/ footnotesetting }}">
                    {{# aboutuslinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_aboutuslink pr-2 mr-2">
                            <a href="{{ aboutuslink }}">{{ aboutuspagetitle }}</a>
                        </span>
                    {{/ aboutuslinkpositionfootnote }}
                    {{# offerslinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_offerslink pr-2 mr-2">
                            <a href="{{ offerslink }}">{{ offerspagetitle }}</a>
                        </span>
                    {{/ offerslinkpositionfootnote }}
                    {{# imprintlinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_imprintlink pr-2 mr-2">
                            <a href="{{ imprintlink }}">{{ imprintpagetitle }}</a>
                        </span>
                    {{/ imprintlinkpositionfootnote }}
                    {{# contactlinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_contactlink pr-2 mr-2">
                            <a href="{{ contactlink }}">{{ contactpagetitle }}</a>
                        </span>
                    {{/ contactlinkpositionfootnote }}
                    {{# helplinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_helplink pr-2 mr-2">
                            <a href="{{ helplink }}">{{ helppagetitle }}</a>
                        </span>
                    {{/ helplinkpositionfootnote }}
                    {{# maintenancelinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_maintenancelink pr-2 mr-2">
                            <a href="{{ maintenancelink }}">{{ maintenancepagetitle }}</a>
                        </span>
                    {{/ maintenancelinkpositionfootnote }}
                    {{# page1linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page1link pr-2 mr-2">
                            <a href="{{ page1link }}">{{ page1pagetitle }}</a>
                        </span>
                    {{/ page1linkpositionfootnote }}
                    {{# page2linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page2link pr-2 mr-2">
                            <a href="{{ page2link }}">{{ page2pagetitle }}</a>
                        </span>
                    {{/ page2linkpositionfootnote }}
                    {{# page3linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page3link pr-2 mr-2">
                            <a href="{{ page3link }}">{{ page3pagetitle }}</a>
                        </span>
                    {{/ page3linkpositionfootnote }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="row';
                $value = $context->find('footnotesetting');
                $buffer .= $this->sectionEb70bb93f9d385174514011e7c780c87($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('aboutuslinkpositionfootnote');
                $buffer .= $this->section03658ecc7cf89cd8b41a2e2aa252ddab($context, $indent, $value);
                $value = $context->find('offerslinkpositionfootnote');
                $buffer .= $this->section4c528e340306a32629cd7e091db4cc8d($context, $indent, $value);
                $value = $context->find('imprintlinkpositionfootnote');
                $buffer .= $this->section4ff244caa51a266d8c455419373920ee($context, $indent, $value);
                $value = $context->find('contactlinkpositionfootnote');
                $buffer .= $this->sectionCdf6185a28f9cf5e39b14a13443e3651($context, $indent, $value);
                $value = $context->find('helplinkpositionfootnote');
                $buffer .= $this->sectionC569bcfb8179be760d1d28d44dc2195f($context, $indent, $value);
                $value = $context->find('maintenancelinkpositionfootnote');
                $buffer .= $this->section35703a8cb346339344555faefaf7f7c9($context, $indent, $value);
                $value = $context->find('page1linkpositionfootnote');
                $buffer .= $this->section32860478e0d3ed745e3336065cee6c05($context, $indent, $value);
                $value = $context->find('page2linkpositionfootnote');
                $buffer .= $this->section584b69a18932090ea7affd1de8e1f48b($context, $indent, $value);
                $value = $context->find('page3linkpositionfootnote');
                $buffer .= $this->sectionF506db389573a41b57cb2dd700c95881($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC41c1f73cbfecc2ef65663852576e19e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="footnote" class="py-3">
        <div class="container-fluid">
            <div class="row">
                {{{ footnotesetting }}}
            </div>
            {{#anystaticpagelinkedfromfootnote}}
                <div class="row{{# footnotesetting }} mt-1{{/ footnotesetting }}">
                    {{# aboutuslinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_aboutuslink pr-2 mr-2">
                            <a href="{{ aboutuslink }}">{{ aboutuspagetitle }}</a>
                        </span>
                    {{/ aboutuslinkpositionfootnote }}
                    {{# offerslinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_offerslink pr-2 mr-2">
                            <a href="{{ offerslink }}">{{ offerspagetitle }}</a>
                        </span>
                    {{/ offerslinkpositionfootnote }}
                    {{# imprintlinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_imprintlink pr-2 mr-2">
                            <a href="{{ imprintlink }}">{{ imprintpagetitle }}</a>
                        </span>
                    {{/ imprintlinkpositionfootnote }}
                    {{# contactlinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_contactlink pr-2 mr-2">
                            <a href="{{ contactlink }}">{{ contactpagetitle }}</a>
                        </span>
                    {{/ contactlinkpositionfootnote }}
                    {{# helplinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_helplink pr-2 mr-2">
                            <a href="{{ helplink }}">{{ helppagetitle }}</a>
                        </span>
                    {{/ helplinkpositionfootnote }}
                    {{# maintenancelinkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_maintenancelink pr-2 mr-2">
                            <a href="{{ maintenancelink }}">{{ maintenancepagetitle }}</a>
                        </span>
                    {{/ maintenancelinkpositionfootnote }}
                    {{# page1linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page1link pr-2 mr-2">
                            <a href="{{ page1link }}">{{ page1pagetitle }}</a>
                        </span>
                    {{/ page1linkpositionfootnote }}
                    {{# page2linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page2link pr-2 mr-2">
                            <a href="{{ page2link }}">{{ page2pagetitle }}</a>
                        </span>
                    {{/ page2linkpositionfootnote }}
                    {{# page3linkpositionfootnote }}
                        <span class="theme_boost_union_footnote_link theme_boost_union_footnote_page3link pr-2 mr-2">
                            <a href="{{ page3link }}">{{ page3pagetitle }}</a>
                        </span>
                    {{/ page3linkpositionfootnote }}
                </div>
            {{/anystaticpagelinkedfromfootnote}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="footnote" class="py-3">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footnotesetting'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $value = $context->find('anystaticpagelinkedfromfootnote');
                $buffer .= $this->sectionA73b2f0c054fe4c7b6f829d7407fcc87($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
