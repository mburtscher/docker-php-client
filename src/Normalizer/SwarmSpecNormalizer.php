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
class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\SwarmSpec') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\SwarmSpec) {
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
        $object = new \DockerPhpClient\Model\SwarmSpec();
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
        if (property_exists($data, 'Orchestration')) {
            $object->setOrchestration($this->denormalizer->denormalize($data->{'Orchestration'}, 'DockerPhpClient\\Model\\SwarmSpecOrchestration', 'json', $context));
        }
        if (property_exists($data, 'Raft')) {
            $object->setRaft($this->denormalizer->denormalize($data->{'Raft'}, 'DockerPhpClient\\Model\\SwarmSpecRaft', 'json', $context));
        }
        if (property_exists($data, 'Dispatcher')) {
            $object->setDispatcher($this->denormalizer->denormalize($data->{'Dispatcher'}, 'DockerPhpClient\\Model\\SwarmSpecDispatcher', 'json', $context));
        }
        if (property_exists($data, 'CAConfig')) {
            $object->setCAConfig($this->denormalizer->denormalize($data->{'CAConfig'}, 'DockerPhpClient\\Model\\SwarmSpecCAConfig', 'json', $context));
        }
        if (property_exists($data, 'EncryptionConfig')) {
            $object->setEncryptionConfig($this->denormalizer->denormalize($data->{'EncryptionConfig'}, 'DockerPhpClient\\Model\\SwarmSpecEncryptionConfig', 'json', $context));
        }
        if (property_exists($data, 'TaskDefaults')) {
            $object->setTaskDefaults($this->denormalizer->denormalize($data->{'TaskDefaults'}, 'DockerPhpClient\\Model\\SwarmSpecTaskDefaults', 'json', $context));
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
        if (null !== $object->getOrchestration()) {
            $data->{'Orchestration'} = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
        }
        if (null !== $object->getRaft()) {
            $data->{'Raft'} = $this->normalizer->normalize($object->getRaft(), 'json', $context);
        }
        if (null !== $object->getDispatcher()) {
            $data->{'Dispatcher'} = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
        }
        if (null !== $object->getCAConfig()) {
            $data->{'CAConfig'} = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
        }
        if (null !== $object->getEncryptionConfig()) {
            $data->{'EncryptionConfig'} = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
        }
        if (null !== $object->getTaskDefaults()) {
            $data->{'TaskDefaults'} = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
        }
        return $data;
    }
}