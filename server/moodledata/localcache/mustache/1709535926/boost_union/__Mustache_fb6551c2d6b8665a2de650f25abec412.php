<?php

class __Mustache_fb6551c2d6b8665a2de650f25abec412 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover bg-white">
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $value = $context->find('footerbutton');
        $buffer .= $this->section2fc2d28407d401cf630a5cebc63694f1($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('footerbutton');
        $buffer .= $this->section96d1ee0758389931fa7b7e66e77422db($context, $indent, $value);
        $value = $context->find('footerbutton');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html_endtoken'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('bottombar.drawer');
        $buffer .= $this->sectionE3a000bea10f7a8360fe93a27256f510($context, $indent, $value);
        $buffer .= $indent . '</footer>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);

        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fc2d28407d401cf630a5cebc63694f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="{{#str}}showfooter, theme_boost{{/str}}">
                {{#pix}}e/question, core{{/pix}}
            </button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4bdfb1f709169796081c384c5494f7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfab404e8cfa7ee4179e618138feb7bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{# output.page_doc_link }}
                                <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                            {{/ output.page_doc_link }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionA4bdfb1f709169796081c384c5494f7f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd2e8d3eb3fee67e0caa110d8741b4a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section602536ff81d91856510af3c33571f53b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{# output.services_support_link }}
                                <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                            {{/ output.services_support_link }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionFd2e8d3eb3fee67e0caa110d8741b4a4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33fd48c6ceffc89f2c1a3585b626daf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="footer-support-link">{{{ output.supportemail }}}</div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9776b755acca2ae687c7300c6a78040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{# output.supportemail }}
                                <div class="footer-support-link">{{{ output.supportemail }}}</div>
                            {{/ output.supportemail }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section33fd48c6ceffc89f2c1a3585b626daf9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8954a857b5fcaef3a780c490d2a14b8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-section p-3 border-bottom">
                        {{#footershowhelp}}
                            {{# output.page_doc_link }}
                                <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                            {{/ output.page_doc_link }}
                        {{/footershowhelp}}

                        {{#footershowservices}}
                            {{# output.services_support_link }}
                                <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                            {{/ output.services_support_link }}
                        {{/footershowservices}}

                        {{#footershowcontact}}
                            {{# output.supportemail }}
                                <div class="footer-support-link">{{{ output.supportemail }}}</div>
                            {{/ output.supportemail }}
                        {{/footershowcontact}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-section p-3 border-bottom">
';
                $value = $context->find('footershowhelp');
                $buffer .= $this->sectionDfab404e8cfa7ee4179e618138feb7bd($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footershowservices');
                $buffer .= $this->section602536ff81d91856510af3c33571f53b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footershowcontact');
                $buffer .= $this->sectionD9776b755acca2ae687c7300c6a78040($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5743cc1b86a366ecd353ed045fdb6c2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{# output.has_popover_links }}
                    <div class="footer-section p-3 border-bottom">
                        {{#footershowhelp}}
                            {{# output.page_doc_link }}
                                <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                            {{/ output.page_doc_link }}
                        {{/footershowhelp}}

                        {{#footershowservices}}
                            {{# output.services_support_link }}
                                <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                            {{/ output.services_support_link }}
                        {{/footershowservices}}

                        {{#footershowcontact}}
                            {{# output.supportemail }}
                                <div class="footer-support-link">{{{ output.supportemail }}}</div>
                            {{/ output.supportemail }}
                        {{/footershowcontact}}
                    </div>
                {{/ output.has_popover_links }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.has_popover_links');
                $buffer .= $this->section8954a857b5fcaef3a780c490d2a14b8d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF79d56ead14249e98e7d6dfe9f5cc151(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_aboutuslink">
                            <a href="{{ aboutuslink }}"><i class="icon fa fa-info-circle fa-fw " aria-hidden="true"></i>{{ aboutuspagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_aboutuslink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('aboutuslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-info-circle fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('aboutuspagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10059184439db39a436dc6f00c8a540a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_offerslink">
                            <a href="{{ offerslink }}"><i class="icon fa fa-briefcase fa-fw " aria-hidden="true"></i>{{ offerspagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_offerslink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('offerslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-briefcase fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('offerspagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d881c3218f66c4ea3cd05ab8d45da56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_imprintlink">
                            <a href="{{ imprintlink }}"><i class="icon fa fa-building-o fa-fw " aria-hidden="true"></i>{{ imprintpagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_imprintlink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('imprintlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-building-o fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('imprintpagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5cbe7adab56fe7299029df1dd712aa14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_contactlink">
                            <a href="{{ contactlink }}"><i class="icon fa fa-address-card fa-fw " aria-hidden="true"></i>{{ contactpagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_contactlink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('contactlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-address-card fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('contactpagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08b03489caa637c2b118ef879c66953b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_helplink">
                            <a href="{{ helplink }}"><i class="icon fa fa-question-circle-o fa-fw " aria-hidden="true"></i>{{ helppagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_helplink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('helplink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-question-circle-o fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('helppagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD234906ebaaec5f340f260567eaef8da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_maintenancelink">
                            <a href="{{ maintenancelink }}"><i class="icon fa fa-wrench fa-fw " aria-hidden="true"></i>{{ maintenancepagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_maintenancelink">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('maintenancelink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-wrench fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('maintenancepagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section829303f7b36bbd0de5d6aa3fa2978bd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_page1link">
                            <a href="{{ page1link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page1pagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_page1link">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page1link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('page1pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC517b38bd1f333b252185c15d7be913d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_page2link">
                            <a href="{{ page2link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page2pagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_page2link">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page2link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('page2pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcf6d897ac8edb53d645b2d7f983cfe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link theme_boost_union_footer_page3link">
                            <a href="{{ page3link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page3pagetitle }}</a>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link theme_boost_union_footer_page3link">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('page3link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>';
                $value = $this->resolveValue($context->find('page3pagetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA94607e675e57e87fe969d5f8b283300(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{# aboutuslinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_aboutuslink">
                            <a href="{{ aboutuslink }}"><i class="icon fa fa-info-circle fa-fw " aria-hidden="true"></i>{{ aboutuspagetitle }}</a>
                        </div>
                    {{/ aboutuslinkpositionfooter }}

                    {{# offerslinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_offerslink">
                            <a href="{{ offerslink }}"><i class="icon fa fa-briefcase fa-fw " aria-hidden="true"></i>{{ offerspagetitle }}</a>
                        </div>
                    {{/ offerslinkpositionfooter }}

                    {{# imprintlinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_imprintlink">
                            <a href="{{ imprintlink }}"><i class="icon fa fa-building-o fa-fw " aria-hidden="true"></i>{{ imprintpagetitle }}</a>
                        </div>
                    {{/ imprintlinkpositionfooter }}

                    {{# contactlinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_contactlink">
                            <a href="{{ contactlink }}"><i class="icon fa fa-address-card fa-fw " aria-hidden="true"></i>{{ contactpagetitle }}</a>
                        </div>
                    {{/ contactlinkpositionfooter }}

                    {{# helplinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_helplink">
                            <a href="{{ helplink }}"><i class="icon fa fa-question-circle-o fa-fw " aria-hidden="true"></i>{{ helppagetitle }}</a>
                        </div>
                    {{/ helplinkpositionfooter }}

                    {{# maintenancelinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_maintenancelink">
                            <a href="{{ maintenancelink }}"><i class="icon fa fa-wrench fa-fw " aria-hidden="true"></i>{{ maintenancepagetitle }}</a>
                        </div>
                    {{/ maintenancelinkpositionfooter }}

                    {{# page1linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page1link">
                            <a href="{{ page1link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page1pagetitle }}</a>
                        </div>
                    {{/ page1linkpositionfooter }}

                    {{# page2linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page2link">
                            <a href="{{ page2link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page2pagetitle }}</a>
                        </div>
                    {{/ page2linkpositionfooter }}

                    {{# page3linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page3link">
                            <a href="{{ page3link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page3pagetitle }}</a>
                        </div>
                    {{/ page3linkpositionfooter }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $value = $context->find('aboutuslinkpositionfooter');
                $buffer .= $this->sectionF79d56ead14249e98e7d6dfe9f5cc151($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('offerslinkpositionfooter');
                $buffer .= $this->section10059184439db39a436dc6f00c8a540a($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('imprintlinkpositionfooter');
                $buffer .= $this->section2d881c3218f66c4ea3cd05ab8d45da56($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('contactlinkpositionfooter');
                $buffer .= $this->section5cbe7adab56fe7299029df1dd712aa14($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('helplinkpositionfooter');
                $buffer .= $this->section08b03489caa637c2b118ef879c66953b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('maintenancelinkpositionfooter');
                $buffer .= $this->sectionD234906ebaaec5f340f260567eaef8da($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('page1linkpositionfooter');
                $buffer .= $this->section829303f7b36bbd0de5d6aa3fa2978bd2($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('page2linkpositionfooter');
                $buffer .= $this->sectionC517b38bd1f333b252185c15d7be913d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('page3linkpositionfooter');
                $buffer .= $this->sectionFcf6d897ac8edb53d645b2d7f983cfe4($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63dfce69a0b9aff1a0f808da06e58892(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    <div class="logininfo">
                        {{{ output.login_info }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                    <div class="logininfo">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb2df47741494bd2f277024b54ee0d79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{{ output.standard_footer_html }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5241927ff09a06f6cb68b6d7fd0a377(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>
                            {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
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

    private function section7b9a292ad0a10aabc337b5ab260fa900(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    <div>{{#str}}poweredbymoodle, core{{/str}}</div>
                    {{#output.moodle_release}}
                        <div>
                            {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                        </div>
                    {{/output.moodle_release}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                    <div>';
                $value = $context->find('str');
                $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
                $buffer .= '</div>
';
                $value = $context->findDot('output.moodle_release');
                $buffer .= $this->sectionF5241927ff09a06f6cb68b6d7fd0a377($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA43f6c9e2423e8a27dcfc7195ae72adb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{{ output.standard_end_of_body_html_additionalhtmlfooter }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html_additionalhtmlfooter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96d1ee0758389931fa7b7e66e77422db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="footer-content-popover container" data-region="footer-content-popover">
            {{#footershowpopoverlinks}}
                {{# output.has_popover_links }}
                    <div class="footer-section p-3 border-bottom">
                        {{#footershowhelp}}
                            {{# output.page_doc_link }}
                                <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                            {{/ output.page_doc_link }}
                        {{/footershowhelp}}

                        {{#footershowservices}}
                            {{# output.services_support_link }}
                                <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                            {{/ output.services_support_link }}
                        {{/footershowservices}}

                        {{#footershowcontact}}
                            {{# output.supportemail }}
                                <div class="footer-support-link">{{{ output.supportemail }}}</div>
                            {{/ output.supportemail }}
                        {{/footershowcontact}}
                    </div>
                {{/ output.has_popover_links }}
            {{/footershowpopoverlinks}}
            {{#anystaticpagelinkedfromfooter}}
                <div class="footer-section p-3 border-bottom">
                    {{# aboutuslinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_aboutuslink">
                            <a href="{{ aboutuslink }}"><i class="icon fa fa-info-circle fa-fw " aria-hidden="true"></i>{{ aboutuspagetitle }}</a>
                        </div>
                    {{/ aboutuslinkpositionfooter }}

                    {{# offerslinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_offerslink">
                            <a href="{{ offerslink }}"><i class="icon fa fa-briefcase fa-fw " aria-hidden="true"></i>{{ offerspagetitle }}</a>
                        </div>
                    {{/ offerslinkpositionfooter }}

                    {{# imprintlinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_imprintlink">
                            <a href="{{ imprintlink }}"><i class="icon fa fa-building-o fa-fw " aria-hidden="true"></i>{{ imprintpagetitle }}</a>
                        </div>
                    {{/ imprintlinkpositionfooter }}

                    {{# contactlinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_contactlink">
                            <a href="{{ contactlink }}"><i class="icon fa fa-address-card fa-fw " aria-hidden="true"></i>{{ contactpagetitle }}</a>
                        </div>
                    {{/ contactlinkpositionfooter }}

                    {{# helplinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_helplink">
                            <a href="{{ helplink }}"><i class="icon fa fa-question-circle-o fa-fw " aria-hidden="true"></i>{{ helppagetitle }}</a>
                        </div>
                    {{/ helplinkpositionfooter }}

                    {{# maintenancelinkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_maintenancelink">
                            <a href="{{ maintenancelink }}"><i class="icon fa fa-wrench fa-fw " aria-hidden="true"></i>{{ maintenancepagetitle }}</a>
                        </div>
                    {{/ maintenancelinkpositionfooter }}

                    {{# page1linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page1link">
                            <a href="{{ page1link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page1pagetitle }}</a>
                        </div>
                    {{/ page1linkpositionfooter }}

                    {{# page2linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page2link">
                            <a href="{{ page2link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page2pagetitle }}</a>
                        </div>
                    {{/ page2linkpositionfooter }}

                    {{# page3linkpositionfooter }}
                        <div class="footer-support-link theme_boost_union_footer_page3link">
                            <a href="{{ page3link }}"><i class="icon fa fa-arrow-circle-o-right fa-fw " aria-hidden="true"></i>{{ page3pagetitle }}</a>
                        </div>
                    {{/ page3linkpositionfooter }}
                </div>
            {{/anystaticpagelinkedfromfooter}}
            {{#footershowlogininfo}}
                <div class="footer-section p-3 border-bottom">
                    <div class="logininfo">
                        {{{ output.login_info }}}
                    </div>
                </div>
            {{/footershowlogininfo}}
            <div class="tool_usertours-resettourcontainer"></div>
            {{^footershowusertour}}<style>.tool_usertours-resettourcontainer{display:none;}</style>{{/footershowusertour}}
            {{# output.standard_footer_html }}
                <div class="footer-section p-3 border-bottom">
                    {{{ output.standard_footer_html }}}
                </div>
            {{/ output.standard_footer_html }}
            {{#footershowpowered}}
                <div class="footer-section p-3 border-bottom">
                    <div>{{#str}}poweredbymoodle, core{{/str}}</div>
                    {{#output.moodle_release}}
                        <div>
                            {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                        </div>
                    {{/output.moodle_release}}
                </div>
            {{/footershowpowered}}
            {{# output.standard_end_of_body_html_additionalhtmlfooter }}
                <div class="footer-section p-3 border-bottom">
                    {{{ output.standard_end_of_body_html_additionalhtmlfooter }}}
                </div>
            {{/ output.standard_end_of_body_html_additionalhtmlfooter }}
            {{{ output.standard_end_of_body_html_endtoken }}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="footer-content-popover container" data-region="footer-content-popover">
';
                $value = $context->find('footershowpopoverlinks');
                $buffer .= $this->section5743cc1b86a366ecd353ed045fdb6c2c($context, $indent, $value);
                $value = $context->find('anystaticpagelinkedfromfooter');
                $buffer .= $this->sectionA94607e675e57e87fe969d5f8b283300($context, $indent, $value);
                $value = $context->find('footershowlogininfo');
                $buffer .= $this->section63dfce69a0b9aff1a0f808da06e58892($context, $indent, $value);
                $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer"></div>
';
                $buffer .= $indent . '            ';
                $value = $context->find('footershowusertour');
                if (empty($value)) {
                    
                    $buffer .= '<style>.tool_usertours-resettourcontainer{display:none;}</style>';
                }
                $buffer .= '
';
                $value = $context->findDot('output.standard_footer_html');
                $buffer .= $this->sectionEb2df47741494bd2f277024b54ee0d79($context, $indent, $value);
                $value = $context->find('footershowpowered');
                $buffer .= $this->section7b9a292ad0a10aabc337b5ab260fa900($context, $indent, $value);
                $value = $context->findDot('output.standard_end_of_body_html_additionalhtmlfooter');
                $buffer .= $this->sectionA43f6c9e2423e8a27dcfc7195ae72adb($context, $indent, $value);
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html_endtoken'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA426efb6b6d0ac2fda9fce81244259ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <nav class="navbar fixed-bottom navbar-light bg-white navbar-expand boost-union-bottom-menu d-block d-md-none" aria-label="{{#str}}sitemenubar, admin{{/str}}">
            <div class="bottom-navigation">
                {{> core/moremenu}}
            </div>
        </nav>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <nav class="navbar fixed-bottom navbar-light bg-white navbar-expand boost-union-bottom-menu d-block d-md-none" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <div class="bottom-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3a000bea10f7a8360fe93a27256f510(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#bottombar}}
        <nav class="navbar fixed-bottom navbar-light bg-white navbar-expand boost-union-bottom-menu d-block d-md-none" aria-label="{{#str}}sitemenubar, admin{{/str}}">
            <div class="bottom-navigation">
                {{> core/moremenu}}
            </div>
        </nav>
        {{/bottombar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('bottombar');
                $buffer .= $this->sectionA426efb6b6d0ac2fda9fce81244259ce($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
