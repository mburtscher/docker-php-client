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
class ServicesIdUpdateBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\ServicesIdUpdateBody') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\ServicesIdUpdateBody) {
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
        $object = new \DockerPhpClient\Model\ServicesIdUpdateBody();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'TaskTemplate')) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data->{'TaskTemplate'}, 'DockerPhpClient\\Model\\TaskSpec', 'json', $context));
        }
        if (property_exists($data, 'Mode')) {
            $object->setMode($this->denormalizer->denormalize($data->{'Mode'}, 'DockerPhpClient\\Model\\ServiceSpecMode', 'json', $context));
        }
        if (property_exists($data, 'UpdateConfig')) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data->{'UpdateConfig'}, 'DockerPhpClient\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        }
        if (property_exists($data, 'RollbackConfig')) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data->{'RollbackConfig'}, 'DockerPhpClient\\Model\\ServiceSpecRollbackConfig', 'json', $context));
        }
        if (property_exists($data, 'Networks')) {
            $values_1 = array();
            foreach ($data->{'Networks'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\ServiceSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (property_exists($data, 'EndpointSpec')) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data->{'EndpointSpec'}, 'DockerPhpClient\\Model\\EndpointSpec', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getTaskTemplate()) {
            $data->{'TaskTemplate'} = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        }
        if (null !== $object->getMode()) {
            $data->{'Mode'} = $this->normalizer->normalize($object->getMode(), 'json', $context);
        }
        if (null !== $object->getUpdateConfig()) {
            $data->{'UpdateConfig'} = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        }
        if (null !== $object->getRollbackConfig()) {
            $data->{'RollbackConfig'} = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
        }
        if (null !== $object->getNetworks()) {
            $values_1 = array();
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Networks'} = $values_1;
        }
        if (null !== $object->getEndpointSpec()) {
            $data->{'EndpointSpec'} = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        }
        return $data;
    }
}