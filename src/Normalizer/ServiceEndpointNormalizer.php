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
class ServiceEndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ServiceEndpoint') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ServiceEndpoint) {
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
        $object = new \DockerPhpClient\Model\ServiceEndpoint();
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'DockerPhpClient\\Model\\EndpointSpec', 'json', $context));
        }
        if (property_exists($data, 'Ports')) {
            $values = array();
            foreach ($data->{'Ports'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DockerPhpClient\\Model\\EndpointPortConfig', 'json', $context);
            }
            $object->setPorts($values);
        }
        if (property_exists($data, 'VirtualIPs')) {
            $values_1 = array();
            foreach ($data->{'VirtualIPs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\ServiceEndpointVirtualIPsItem', 'json', $context);
            }
            $object->setVirtualIPs($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        if (null !== $object->getPorts()) {
            $values = array();
            foreach ($object->getPorts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Ports'} = $values;
        }
        if (null !== $object->getVirtualIPs()) {
            $values_1 = array();
            foreach ($object->getVirtualIPs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'VirtualIPs'} = $values_1;
        }
        return $data;
    }
}