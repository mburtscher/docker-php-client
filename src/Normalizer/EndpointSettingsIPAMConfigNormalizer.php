<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EndpointSettingsIPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\EndpointSettingsIPAMConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\EndpointSettingsIPAMConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\EndpointSettingsIPAMConfig();
        if (property_exists($data, 'IPv4Address')) {
            $object->setIPv4Address($data->{'IPv4Address'});
        }
        if (property_exists($data, 'IPv6Address')) {
            $object->setIPv6Address($data->{'IPv6Address'});
        }
        if (property_exists($data, 'LinkLocalIPs')) {
            $values = array();
            foreach ($data->{'LinkLocalIPs'} as $value) {
                $values[] = $value;
            }
            $object->setLinkLocalIPs($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIPv4Address()) {
            $data->{'IPv4Address'} = $object->getIPv4Address();
        }
        if (null !== $object->getIPv6Address()) {
            $data->{'IPv6Address'} = $object->getIPv6Address();
        }
        if (null !== $object->getLinkLocalIPs()) {
            $values = array();
            foreach ($object->getLinkLocalIPs() as $value) {
                $values[] = $value;
            }
            $data->{'LinkLocalIPs'} = $values;
        }
        return $data;
    }
}