<?php

class __Mustache_ca44b53c170e0e48596111868ae4230c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card-body">
';
        $buffer .= $indent . '    <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF6a79f0382d459aaa4d4b920cadbae46($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <form class="signup-form" action="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '/login/index.php" method="POST" role="form">
';
        $buffer .= $indent . '        <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <label for="username">
';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section3d4f35b760e202b993b92081e51c51dc($context, $indent, $value);
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <div class="input-group-addon"><i class="fa fa-envelope add-on"></i></div>
';
        $buffer .= $indent . '            <input type="text" class="form-control" id="username" name="username" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
        $buffer .= '" required />
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <label for="password">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <div class="input-group">
';
        $buffer .= $indent . '            <div class="input-group-addon"><i class="fa fa-lock add-on"></i></div>
';
        $buffer .= $indent . '            <input type="password" class="form-control" id="password" name="password" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '" required />
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="sign-up-btn">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-primary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '
';
        // 'output.has_identity_providers' section
        $value = $context->findDot('output.has_identity_providers');
        $buffer .= $this->sectionA0208376583a6c1b69f657e003f23423($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <p class="my-2"><a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '/login/forgot_password.php">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section8fa473a2cfabbbdace2921ce71674c32($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'canloginasguest' section
        $value = $context->find('canloginasguest');
        $buffer .= $this->section65468df33c79ff5633b22e22fa025e59($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF6a79f0382d459aaa4d4b920cadbae46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'platform_access, theme_moove';
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
                
                $buffer .= 'platform_access, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
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
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d4f35b760e202b993b92081e51c51dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}}usernameemail{{/str}}
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
                
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
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
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
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
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5456a08ec5784e3ebc6ed16c00402b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
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
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdc4050353240d43b000c484a4dc0df6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="potentialidp">
                    <a href="{{{url}}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                    {{#iconurl}}
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                    {{/iconurl}}
                    {{name}}
                    </a>
                </div>
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
                
                $buffer .= $indent . '                <div class="potentialidp">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-secondary btn-block">
';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->sectionF5456a08ec5784e3ebc6ed16c00402b3($context, $indent, $value);
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0208376583a6c1b69f657e003f23423(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h5 class="mt-2">{{#str}} potentialidps, auth {{/str}}</h5>
        <div class="potentialidplist" class="m-t-1">
            {{#output.get_identity_providers}}
                <div class="potentialidp">
                    <a href="{{{url}}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-secondary btn-block">
                    {{#iconurl}}
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                    {{/iconurl}}
                    {{name}}
                    </a>
                </div>
            {{/output.get_identity_providers}}
        </div>
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
                
                $buffer .= $indent . '        <h5 class="mt-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '        <div class="potentialidplist" class="m-t-1">
';
                // 'output.get_identity_providers' section
                $value = $context->findDot('output.get_identity_providers');
                $buffer .= $this->sectionAdc4050353240d43b000c484a4dc0df6($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
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
                
                $buffer .= 'forgotten';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
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
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fa473a2cfabbbdace2921ce71674c32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="btn btn-register btn-primary" href="{{{ config.wwwroot }}}/login/signup.php?">{{#str}}newaccount{{/str}}</a>
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
                
                $buffer .= $indent . '        <a class="btn btn-register btn-primary" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/signup.php?">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
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
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65468df33c79ff5633b22e22fa025e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <form action="{{{ config.wwwroot }}}/login/index.php" method="post" id="guestlogin">
            <input type="hidden" name="username" value="guest" />
            <input type="hidden" name="password" value="guest" />
            <input type="hidden" name="logintoken" value="{{logintoken}}">
            <button class="btn btn-default btn-block mt-2" type="submit">{{#str}}loginguest{{/str}}</button>
        </form>
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
                
                $buffer .= $indent . '        <form action="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/login/index.php" method="post" id="guestlogin">
';
                $buffer .= $indent . '            <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '            <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '            <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <button class="btn btn-default btn-block mt-2" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
