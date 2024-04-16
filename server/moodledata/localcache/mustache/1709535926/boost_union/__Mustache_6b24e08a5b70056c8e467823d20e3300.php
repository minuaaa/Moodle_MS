<?php

class __Mustache_6b24e08a5b70056c8e467823d20e3300 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="lac-generate-token">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <ul class="nav nav-tabs" >
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link active ';
        $value = $this->resolveValue($context->findDot('tabstatus.general'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-toggle="tab" href="#general">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section9cac6e41b8d2a2f3f442af8b75816dd0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <i class="fa"></i>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link ';
        $value = $this->resolveValue($context->findDot('tabstatus.token'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"  data-toggle="tab" href="#connection">';
        $value = $context->find('str');
        $buffer .= $this->section98c91e96eca7d0c20662bdf9828d1e22($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <i class="fa"></i>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="tab-content">
';
        $buffer .= $indent . '        <div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
';
        $buffer .= $indent . '            <div class="heading text-center pt-1">
';
        $buffer .= $indent . '                <p> ';
        $value = $context->find('str');
        $buffer .= $this->section177e2fb73f51089acc85c45a8ce83be5($context, $indent, $value);
        $buffer .= ' </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="form generalform mform mt-1 pt-5" >
';
        $buffer .= $indent . '                <div class="webservice-field">
';
        $buffer .= $indent . '                    <label> ';
        $value = $context->find('str');
        $buffer .= $this->section4763007028d5f00964091c2b27fc7fa4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('webservicehelp'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                     </label>
';
        $value = $context->find('webserviceenabled');
        $buffer .= $this->section2baf613e144738d9fb51bd10f6a1a4d7($context, $indent, $value);
        $value = $context->find('webserviceenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <span class="badge badge-danger"> ';
            $value = $context->find('str');
            $buffer .= $this->sectionEf45c3cf4ff4a97b630c4136575bdc98($context, $indent, $value);
            $buffer .= ' </span>
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->find('webservicebutton'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                        <i class="fa fa-close text-danger"></i>
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="protocal-field">
';
        $buffer .= $indent . '                    <label> ';
        $value = $context->find('str');
        $buffer .= $this->section3db035be2a03fc35a82b33b5e4858ff9($context, $indent, $value);
        $buffer .= ' </label>
';
        $value = $context->find('protocolenabled');
        $buffer .= $this->section1bef95968bb45442867405162572f055($context, $indent, $value);
        $value = $context->find('protocolenabled');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <span class="badge badge-danger"> ';
            $value = $context->find('str');
            $buffer .= $this->sectionEf45c3cf4ff4a97b630c4136575bdc98($context, $indent, $value);
            $buffer .= ' </span>
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->find('protocolbutton'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                        <i class="fa fa-close text-danger"></i>
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="connection-data">
';
        $buffer .= $indent . '                    <div class="form-group">
';
        $buffer .= $indent . '                        <label> ';
        $value = $context->find('str');
        $buffer .= $this->section7b474c29c57ce43438d33585a4fea64f($context, $indent, $value);
        $buffer .= ' </label>
';
        $buffer .= $indent . '                        <div class="form-item">
';
        $buffer .= $indent . '                            <input class="form-control" value="';
        $value = $this->resolveValue($context->find('siteurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"  disabled>
';
        $buffer .= $indent . '                            <span class="badge badge-secondary copytoclipboard" 
';
        $buffer .= $indent . '                                data-toggle="tooltip" title=\'Copy\'>
';
        $buffer .= $indent . '                                <i class="fa fa-clipboard"></i>
';
        $buffer .= $indent . '                            </span>
';
        $buffer .= $indent . '                            <span> 
';
        $value = $context->find('siteurl');
        $buffer .= $this->section7f235e249463e561292cb9f886fdb3a9($context, $indent, $value);
        $value = $context->find('siteurl');
        if (empty($value)) {
            
            $buffer .= $indent . '                                <i class="fa fa-close text-danger"></i>
';
        }
        $buffer .= $indent . '                            </span>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="form-group ';
        $value = $context->find('webtoken');
        if (empty($value)) {
            
            $buffer .= ' lac-error ';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                        <label> ';
        $value = $context->find('str');
        $buffer .= $this->sectionB17d7b9fe2ac4d792bfffb04e77bf287($context, $indent, $value);
        $buffer .= ' </label>
';
        $buffer .= $indent . '                        <div class="form-item">
';
        $buffer .= $indent . '                            <input class="form-control" value="';
        $value = $this->resolveValue($context->find('webtoken'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"  disabled>
';
        $buffer .= $indent . '                            <span class="badge badge-secondary copytoclipboard" 
';
        $buffer .= $indent . '                                data-toggle="tooltip" title=\'Copy\'>
';
        $buffer .= $indent . '                                <i class="fa fa-clipboard"></i>
';
        $buffer .= $indent . '                            </span>
';
        $value = $context->find('webtoken');
        $buffer .= $this->section26b90d901632bcf7ed250c271f2cd66b($context, $indent, $value);
        $value = $context->find('webtoken');
        if (empty($value)) {
            
            $buffer .= $indent . '                            <span> <i class="fa fa-close text-danger"></i></span>
';
        }
        $value = $context->find('webtoken');
        if (empty($value)) {
            
            $buffer .= $indent . '                            <p> ';
            $value = $context->find('str');
            $buffer .= $this->section6659d39a3cbfc56aea6c55d32282152a($context, $indent, $value);
            $buffer .= ' </p>
';
        }
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $value = $context->find('webtoken');
        $buffer .= $this->section82bf30490ed675ef7814f268f61ae4b0($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="connection" role="tabpanel" aria-labelledby="connection-tab">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('connectionform'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section20362cd73f38ce8159ce46e6bacaef39($context, $indent, $value);

        return $buffer;
    }

    private function section9cac6e41b8d2a2f3f442af8b75816dd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' general, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' general, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98c91e96eca7d0c20662bdf9828d1e22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' generatetoken, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' generatetoken, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section177e2fb73f51089acc85c45a8ce83be5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settingstoconnect, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' settingstoconnect, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4763007028d5f00964091c2b27fc7fa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enablewebservices, core_admin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enablewebservices, core_admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d69745c45338a64b036101a4c834527(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enabled, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enabled, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2baf613e144738d9fb51bd10f6a1a4d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="badge badge-success"> {{#str}} enabled, local_lmsace_connect {{/str}} </span>
                        {{{webservicebutton}}}
                        <i class="fa fa-check text-success"></i>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="badge badge-success"> ';
                $value = $context->find('str');
                $buffer .= $this->section1d69745c45338a64b036101a4c834527($context, $indent, $value);
                $buffer .= ' </span>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('webservicebutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        <i class="fa fa-check text-success"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf45c3cf4ff4a97b630c4136575bdc98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disabled, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3db035be2a03fc35a82b33b5e4858ff9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enablewebprotocal, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enablewebprotocal, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bef95968bb45442867405162572f055(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="badge badge-success"> {{#str}} enabled, local_lmsace_connect {{/str}} </span>
                        {{{protocolbutton}}}
                        <i class="fa fa-check text-success"></i>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="badge badge-success"> ';
                $value = $context->find('str');
                $buffer .= $this->section1d69745c45338a64b036101a4c834527($context, $indent, $value);
                $buffer .= ' </span>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('protocolbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        <i class="fa fa-check text-success"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b474c29c57ce43438d33585a4fea64f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' siteurl, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' siteurl, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f235e249463e561292cb9f886fdb3a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <i class="fa fa-check text-success"></i>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <i class="fa fa-check text-success"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB17d7b9fe2ac4d792bfffb04e77bf287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' webservicetoken, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' webservicetoken, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26b90d901632bcf7ed250c271f2cd66b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <i class="fa fa-check text-success"></i>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <i class="fa fa-check text-success"></i>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6659d39a3cbfc56aea6c55d32282152a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tokeningeneratetoken, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tokeningeneratetoken, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0bfe634685835970c0848fb6541db43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' missingcapabilities, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' missingcapabilities, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32624af55b63b5ae221737cc0ea877c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' missingcapabilitiesmsg, local_lmsace_connect ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' missingcapabilitiesmsg, local_lmsace_connect ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c3cd21944f93b4761d046170d27ac95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="form-group lac-error">
                        <label> {{#str}} missingcapabilities, local_lmsace_connect {{/str}} </label>
                        <p> {{#str}} missingcapabilitiesmsg, local_lmsace_connect {{/str}} </p>
                        {{{missingcapability}}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="form-group lac-error">
';
                $buffer .= $indent . '                        <label> ';
                $value = $context->find('str');
                $buffer .= $this->sectionC0bfe634685835970c0848fb6541db43($context, $indent, $value);
                $buffer .= ' </label>
';
                $buffer .= $indent . '                        <p> ';
                $value = $context->find('str');
                $buffer .= $this->section32624af55b63b5ae221737cc0ea877c5($context, $indent, $value);
                $buffer .= ' </p>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('missingcapability'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82bf30490ed675ef7814f268f61ae4b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#iscapmissing}}
                    <div class="form-group lac-error">
                        <label> {{#str}} missingcapabilities, local_lmsace_connect {{/str}} </label>
                        <p> {{#str}} missingcapabilitiesmsg, local_lmsace_connect {{/str}} </p>
                        {{{missingcapability}}}
                    </div>
                    {{/iscapmissing}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('iscapmissing');
                $buffer .= $this->section0c3cd21944f93b4761d046170d27ac95($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20362cd73f38ce8159ce46e6bacaef39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($) {
        $(\'.copytoclipboard\').on(\'click\', function() {
            var copytext = $(this).prev().val();
            if (typeof (navigator.clipboard) == \'undefined\') {
                var textArea = document.createElement("textarea");
                textArea.value = copytext;
                textArea.style.position = "fixed";  //avoid scrolling to bottom
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();
                try {
                    var successful = document.execCommand(\'copy\');

                } catch (err) {

                }
                document.body.removeChild(textArea)
                return;
            } else {
                navigator.clipboard.writeText(copytext);
            }
        });
    })
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(\'.copytoclipboard\').on(\'click\', function() {
';
                $buffer .= $indent . '            var copytext = $(this).prev().val();
';
                $buffer .= $indent . '            if (typeof (navigator.clipboard) == \'undefined\') {
';
                $buffer .= $indent . '                var textArea = document.createElement("textarea");
';
                $buffer .= $indent . '                textArea.value = copytext;
';
                $buffer .= $indent . '                textArea.style.position = "fixed";  //avoid scrolling to bottom
';
                $buffer .= $indent . '                document.body.appendChild(textArea);
';
                $buffer .= $indent . '                textArea.focus();
';
                $buffer .= $indent . '                textArea.select();
';
                $buffer .= $indent . '                try {
';
                $buffer .= $indent . '                    var successful = document.execCommand(\'copy\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                } catch (err) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                document.body.removeChild(textArea)
';
                $buffer .= $indent . '                return;
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                navigator.clipboard.writeText(copytext);
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    })
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
