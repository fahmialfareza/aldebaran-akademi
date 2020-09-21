<?php

class __Mustache_8c77a32726b0164dc4907af94f2fa508 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '            <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3d46676fa71043dd556eac6777c89162($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <h4>';
        $value = $this->resolveValue($context->find('getintouchcontent'), $context);
        $buffer .= $value;
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <ul>
';
        // 'website' section
        $value = $context->find('website');
        $buffer .= $this->section13ac62796a50f6c46760a5456fd14755($context, $indent, $value);
        // 'mobile' section
        $value = $context->find('mobile');
        $buffer .= $this->section52ff7c0c747c038ff87392d4c2f23a40($context, $indent, $value);
        // 'mail' section
        $value = $context->find('mail');
        $buffer .= $this->sectionB963605a7e987bbc7070a1cba72268c4($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        // 'facebook' section
        $value = $context->find('facebook');
        $buffer .= $this->sectionEa99038574cccb08dde1b377ea2a235b($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'twitter' section
        $value = $context->find('twitter');
        $buffer .= $this->section1ae384b19a9bffa81950fba31c9f8ed5($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'linkedin' section
        $value = $context->find('linkedin');
        $buffer .= $this->sectionA0d3ae3e1d7bb37828cd7a2cfbb53679($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'youtube' section
        $value = $context->find('youtube');
        $buffer .= $this->sectionFa47f8bb8a958a358998a011131806d2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'instagram' section
        $value = $context->find('instagram');
        $buffer .= $this->sectionCdc07de79add03d942beace535c20e3f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'whatsapp' section
        $value = $context->find('whatsapp');
        $buffer .= $this->section4fcb3078954330ee750bc403ea952608($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'disablebottomfooter' inverted section
        $value = $context->find('disablebottomfooter');
        if (empty($value)) {
            
            $buffer .= $indent . '  <footer id="page-footer" class="p-y-1">
';
            $buffer .= $indent . '      <div class="container-fluid">
';
            $buffer .= $indent . '          <div id="course-footer">';
            $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madewithmoodle">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section35f635c8ba97bc48efcfa9ed9dd99cf3($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '              <a href="https://moodle.org"><img src="';
            $value = $this->resolveValue($context->findDot('output.get_pix_image_url_base'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '/moodle-logo-white.png" alt="Moodle logo"></a>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madeby">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section56e3b38ca8d3097861df300611a406de($context, $indent, $value);
            $buffer .= ' <i class="text-danger fa fa-heart"></i> ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7a1b67c3b84451cafdd6fc65fb7ab03a($context, $indent, $value);
            $buffer .= ' <a href="http://conecti.me">conecti.me</a></p>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '  </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section3d46676fa71043dd556eac6777c89162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stayintouch, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'stayintouch, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13ac62796a50f6c46760a5456fd14755(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-globe"></i>
                        <a href="{{{website}}}" target="_blank">{{{website}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-globe"></i>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52ff7c0c747c038ff87392d4c2f23a40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-phone"></i>
                        <a href="tel:{{{mobile}}}" target="_blank">{{{mobile}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-phone"></i>
';
                $buffer .= $indent . '                        <a href="tel:';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB963605a7e987bbc7070a1cba72268c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-envelope"></i>
                        <a href="mailto:{{{mail}}}" target="_blank">{{{mail}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-envelope"></i>
';
                $buffer .= $indent . '                        <a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa99038574cccb08dde1b377ea2a235b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook btn">
                    <i class="slicon-social-facebook"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ae384b19a9bffa81950fba31c9f8ed5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter btn">
                    <i class="slicon-social-twitter"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0d3ae3e1d7bb37828cd7a2cfbb53679(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin btn">
                    <i class="slicon-social-linkedin"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa47f8bb8a958a358998a011131806d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube btn">
                    <i class="slicon-social-youtube"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdc07de79add03d942beace535c20e3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram btn">
                    <i class="slicon-social-instagram"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fcb3078954330ee750bc403ea952608(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li>
                      <a href="https://api.whatsapp.com/send?phone={{{whatsapp}}}" target="_blank" class="whatsapp btn">
                          <i class="fa fa-whatsapp"></i>
                      </a>
                  </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li>
';
                $buffer .= $indent . '                      <a href="https://api.whatsapp.com/send?phone=';
                $value = $this->resolveValue($context->find('whatsapp'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="whatsapp btn">
';
                $buffer .= $indent . '                          <i class="fa fa-whatsapp"></i>
';
                $buffer .= $indent . '                      </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f635c8ba97bc48efcfa9ed9dd99cf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madewitmoodle, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'madewitmoodle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56e3b38ca8d3097861df300611a406de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madeby, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'madeby, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a1b67c3b84451cafdd6fc65fb7ab03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'by, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'by, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
