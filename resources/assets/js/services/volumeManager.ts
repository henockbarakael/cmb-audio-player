import { ref } from 'vue'
import { preferenceStore } from '@/stores'

export class VolumeManager {
  private input!: HTMLInputElement
  public volume = ref(0)

  public init (input: HTMLInputElement) {
    this.input = input
    this.set(preferenceStore.volume)
  }

  public get () {
    return this.volume.value
  }

  public set (volume: number, persist = true) {
    if (persist) {
      preferenceStore.volume = volume
    }

    this.volume.value = volume
    this.input.value = String(volume)
  }

  public mute () {
    this.set(0, false)
  }

  public unmute () {
    this.set(preferenceStore.volume)
  }
}

export const volumeManager = new VolumeManager()
